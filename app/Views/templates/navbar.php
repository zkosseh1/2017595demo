<nav class="navbar navbar-expand-md navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>/recipes">Zanah's Cooking</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url()?>/recipes">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url()?>/randomrecipe">Random Recipe</a>
        </li>
              
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Site..." aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>