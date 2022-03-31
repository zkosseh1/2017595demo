<div
  class="bg-image"
  style="
    background-image: url('https://i.etsystatic.com/14403653/r/il/8eb7e9/2218117301/il_fullxfull.2218117301_hyt4.jpg');
    
  ">




<div class="row p-3">
		<div class="col-lg-5 my-2">
		<h2><?= $response['0']['title'] ?></h2>
		<img src="<?= $response['0']['image'] ?>" class="img-fluid rounded mx-auto d-block " alt="...">
		<h2>Ingredients</h2>
		<?php foreach ($response['0']['ingredients'] as $ingredients): ?>
		<p class="card-title"><?= $ingredients ?></p>
		 <?php endforeach ?>
		</div>
		
		<div class="col-lg-5 mt-5">
		<h2>Steps</h2>
		<?php foreach ($response['0']['instructions'] as $instructions): ?>
		<p class="card-title"><?= $instructions['text'] ?><br/></p>
		 <?php endforeach ?>
		</div>

		</div>
</div> 