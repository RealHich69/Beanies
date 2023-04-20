<?php
session_start();
?>
<?php if(isset($_POST['login'])){
    
    $_SESSION['login'] = $_POST['login'];
}
?>
<?php require_once ("variable.php");
require_once ("function.php");
if (isset($pageTitle)){
  $pageTitle = 'Bienvenue !';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <title>Document</title>
</head>
<body>  
    
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=list">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=cart">Panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=formulaire">Nous Contacter</a>
        </li>
      </ul>
    </div>
</div>
<?php if(isset($_SESSION['login'])){
    
    echo $_SESSION ['login'];
}
?>
<a href="?page=logout">Deconnexion</a>
<button class="btn btn-outline-success me-2" type="button">
   <a href="?page=login">Login</a></button>
</nav>
<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
  </form>
</nav>
    </header>