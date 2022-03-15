<?php

namespace App\Controllers;

use App\Models\RecipesModel;

class Recipes extends BaseController
{
	public function index()
	{
		$model = model(RecipesModel::class);

		$data = [
			'news'  => $model->getNews(),
			'title' => "Zanah's Cooking",
		];

		echo view('templates/header', $data);
		echo view('news/overview', $data);
		echo view('templates/footer', $data);
	}
	public function view($slug = null)
	{
		$model = model(RecipesModel::class);

		$data['news'] = $model->getNews($slug);

		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}

		$data['title'] = $data['news']['title'];

		echo view('templates/header', $data);
		echo view('news/view', $data);
		echo view('templates/footer', $data);
	}
	
	public function create()
	{
		$model = model(RecipesModel::class);

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required',
		])) {
			$model->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'body'  => $this->request->getPost('body'),
			]);

			return redirect()->to('recipes');
		} else {
			echo view('templates/header', ['title' => 'Create A New Article']);
			echo view('news/create');
			echo view('templates/footer');
		}
	}
}