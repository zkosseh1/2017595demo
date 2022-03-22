<p class="text-white"><?= esc($title) ?></p>

<div class="p-3 mb-2 bg-success text-white"><h2>Home</h2></div>

<a class="btn btn-success mb-3" href="<?=base_url()?>/news/create">Create New Article</a>

<?php if (! empty($news) && is_array($news)): ?>

	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <?php foreach ($news as $news_item): ?>
	
		<div class="col">
		<div class="card m-2 h-100 w-60">
		  <div class="card-body">
			<h5 class="card-title"><p class="text-center"><?= esc($news_item['title']) ?></h5>
			<img src="<?= esc($news_item['images']) ?>" class="img-fluid rounded mx-auto d-block w-50" alt="...">
			</div>
		  <div class="card-footer">
			<a href="<?=base_url()?>/recipes/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-success">View This Recipe</a>
			<a href="<?=base_url()?>/recipes/amend/<?= esc($news_item['id'], 'url') ?>" class="btn btn-outline-primary">Edit This Article</a>
			<p><a href="<?=base_url ()?>/recipes/delete/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-danger m-3">Delete Article</a></p>
		 </div>
		</div>
		</div>
	

    <?php endforeach ?>
	
	</div>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>