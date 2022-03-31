<!-- Background image -->
<div
  class="bg-image p-3"
  style="
    background-image: url('https://i.etsystatic.com/14403653/r/il/8eb7e9/2218117301/il_fullxfull.2218117301_hyt4.jpg');
    height: 100vh;
  "

<!-- Background image -->




<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class= "p-3" action="<?=base_url()?>/news/create" method="post">
    <?= csrf_field() ?>

	<div class="mb-3">
		<label for="title" class="form-label">Recipes Title</label>
		<input class="form-control" type="input" name="title" /><br />
	</div>
	
	<div class="mb-3">
		<label for="body" class="form-label">Recipe Instructions</label>
		<textarea input class="form-control" name="body" cols="45" rows="4"></textarea><br />
	</div>
	
	<div class="mb-3">
		<label for="body" class="form-label">Recipe Image Link</label>
		<textarea input class="form-control" name="images" cols="45" rows="2"></textarea><br />
	</div>
	
	
    <input class="btn btn-success" type="submit" name="submit" value="Post New Recipe" />
</form>

</div>