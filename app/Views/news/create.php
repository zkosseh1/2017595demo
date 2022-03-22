<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="<?=base_url()?>/news/create" method="post">
    <?= csrf_field() ?>

	<div class="mb-3">
		<label for="title" class="form-label">Article Title</label>
		<input class="form-control" type="input" name="title" /><br />
	</div>
	
	<div class="mb-3">
		<label for="body" class="form-label">Article Text</label>
		<textarea input class="form-control" name="body" cols="45" rows="4"></textarea><br />
	</div>
	
    <input class="btn btn-outline-success" type="submit" name="submit" value="Post New Article" />
</form>