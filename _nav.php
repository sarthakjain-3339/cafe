<?php 
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-coloum">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    
    <li class="nav-item active">
    <a class="nav-link" href="/cafe/about.php">About</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#">Contact us</a>
</li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Foods
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Snacks</a>
        <a class="dropdown-item" href="#">Drinks</a>
        <a class="dropdown-item" href="#">simple</a>
        <div class="dropdown-divider"></div>
         </div>
    </li>
    
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <a href="/cafe/login.php"><button type="button" class="btn btn-success mx-1">Login</button></a>
  <button type="button" class="btn btn-success ml-1">Logout</button>

</div>
</nav>'; 
?>