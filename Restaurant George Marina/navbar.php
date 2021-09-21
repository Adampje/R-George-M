<?php
  $active = (isset($_GET["content"]))?  $_GET["content"]: "";
?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid px-1">
    <a class="navbar-brand" >GeorgeMarina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <li class="nav-item <?php echo ($active == "home")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item <?php echo ($active == "contact")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=contact">Contact</a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-auto">
      <img src="img\GeorgeMarina.png" alt="logo" class="image-fluid" width="100px" height="100px" >
      </ul>
  </div>
</nav>


  
