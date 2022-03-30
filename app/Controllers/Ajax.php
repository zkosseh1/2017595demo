<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Ajax extends BaseController
{
	public function get($slug = null)
	{
		$model = model(RecipesModel::class);
		$data = $model->getNews($slug);
		//retrieves data from model & converts it to JSON code
		print(json_encode($data));
	}
	
}