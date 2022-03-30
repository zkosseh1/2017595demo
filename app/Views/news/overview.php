
<a class="btn btn-success my-3" href="<?=base_url()?>/news/create">Add Recipe</a>



<div>

<p id="ajaxArticle"></p>
 
</div>

<?php if (! empty($news) && is_array($news)): ?>

	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <?php foreach ($news as $news_item): ?>
	
	
		<div class="col">
		<div class="card h-100 w-60">
		  <div class="card-body">
			<h5 class="card-title"><p class="text-center"><?= esc($news_item['title']) ?></h5>
			<img src="<?= esc($news_item['images']) ?>" class="img-fluid rounded mx-auto d-block w-50" alt="...">
			</div>
		  <div class="card-footer">
			<a href="<?=base_url()?>/recipes/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-success">View</a>
			<a href="<?=base_url()?>/recipes/amend/<?= esc($news_item['id'], 'url') ?>" class="btn btn-outline-primary">Edit</a>
			<a href="<?=base_url ()?>/recipes/delete/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-outline-danger">Delete</a>
			<button class="btn btn-outline-secondary" onclick="getData('<?= esc($news_item['slug'], 'url') ?>')">Ajax</button>
		 </div>
		</div>
		</div>
	
	<script>
	function getData(slug) {
		
		// Fetch data from database
		fetch('https://mi-linux.wlv.ac.uk/~2017595/ci4-demo/public/index.php/ajax/get/'  + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			
			let recipe = document.getElementById("ajaxArticle");
			recipe.className = 'alert alert-primary';
			recipe.innerHTML = response.title + ": " + response.body;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script> 

    <?php endforeach ?>
	
	</div>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>