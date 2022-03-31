<div
  class="bg-image p-3"
  style="
    background-image: url('https://i.etsystatic.com/14403653/r/il/8eb7e9/2218117301/il_fullxfull.2218117301_hyt4.jpg');
    
	
  ">




<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>


<form action="<?=base_url()?>/Recipes/update_recipe" method="post">
    <?= csrf_field() ?>

	<div class="mb-3">
    <label for="title" class="form-label">Recipe Title</label>
    <input class="form-control" type="input" name="title" value="<?= esc($news['title']) ?>"><br />
	
	<div class="mb-3">
    <label for="body" class="form-label">Recipe Instructions</label>
    <textarea class="form-control" name="body" cols="45" rows="8"><?= esc($news['body']) ?></textarea><br />
	<input type="hidden" name="id" value="<?= esc($news['id']) ?>">
	
	<div class="mb-3">
    <label for="body" class="form-label">Recipe Image Link</label>
    <textarea class="form-control" name="images" cols="45" rows="8"><?= esc($news['images']) ?></textarea><br />
	
	
	
    <input class="btn btn-outline-primary" type="submit" name="submit" value="Update Article" />
</form>

</div>
</div>
</div>
</div>