<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipesModel extends Model
{
    protected $table = 'news';
	protected $allowedFields = ['title', 'slug', 'body', 'images'];
	
	public function getNews($slug = false)
	{
		if ($slug === false) {
			return $this->findAll ();
		}
		
		return $this->where(['slug' => $slug])->first();
	}
	
	public function deleteNews($slug)
	
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('news');
		$builder->delete(['slug' => $slug]);

	}
	
	public function edit($id = false){
		
		return $this->where(['id' => $id])->first();
		
		
		
	}
}