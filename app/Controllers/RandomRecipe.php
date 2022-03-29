<?php

namespace App\Controllers;

use App\Models\RecipesModel;

class RandomRecipe extends BaseController
{
	public function getRandomRecipe()
	{

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://random-recipes.p.rapidapi.com/ai-quotes/1",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"X-RapidAPI-Host: random-recipes.p.rapidapi.com",
				"X-RapidAPI-Key: 5f1a742904mshf6ea063a1c9369bp13f426jsn2d454278dc4e"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$data['response'] = json_decode($response, true);
			echo view('templates/header');
			echo view('news/recipeapi', $data);
			echo view('templates/footer');
		}

			
		
}}