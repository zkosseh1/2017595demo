<?php

namespace App\Controllers;

use App\Models\RecipesModel;

class Recipes extends BaseController
{
	public function amend($id)
	{
		$model = model(RecipesModel::class);

			$data = ['news' => $model->edit($id),];

			
			
			echo view('templates/header', ['title' => 'Update Article']);
			echo view('news/amend', $data);
			echo view('templates/footer');
		
	}
	
	public function update_recipe(){
		
	helper(['form']);
	
	$data = [
			'title' => $this->request->getVar('title'),
			'images'=> $this->request->getVar('images'),
			'body' => $this->request->getVar('body'),
			'id' => $this->request->getVar('id'),
			];
	$db = \Config\Database::connect();
	
	$this->builder = $db->table('news')
	->set('title', $data['title'])
	->set('images', $data['images'])
	->set('body', $data['body'])
	->where('id', $data['id'])->update();
	return redirect()->to('recipes');
		
		

		
	}
	
	public function delete($slug)
	{
		print("Delete Article: ".$slug);
	
		$model = model(RecipesModel::class);
		
		$model->deleteNews($slug);
		
		return redirect()->to('recipes');
	}
	
	
	public function index()
	{
		$model = model(RecipesModel::class);

		$data = [
			'news'  => $model->getNews(),
			'title' => "Home",
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
			'images'=> 'required',
			
		])) {
			$model->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', true),
				'body'  => $this->request->getPost('body'),
				'images'=> $this->request->getPost('images'),
				
			]);

			return redirect()->to('recipes');
		} else {
			echo view('templates/header', ['title' => 'Post A New Recipe']);
			echo view('news/create');
			echo view('templates/footer');
		}
	}
	
	
}