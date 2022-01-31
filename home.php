<?php
if(!isset($_COOKIE['customer']))
{
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
    <link rel="stylesheet" href=".\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href=".\css\home.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-uppercase"><?php if(isset($_COOKIE['customer'])){echo $_COOKIE['customer'];} ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Service</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="text-decoration-none text-light" href="index.php">Logout</a>
    </form>
  </div>
</nav>
<center>
    <h1>Vehicle Management</h1> 
</center>
<div class='container'>
    <h2>Service About:-</h2><br>
    <marquee class="move" scrollamount='10px'>Welcome water wash(₹1000), dent removal(₹500),tyre change(₹1200) & once you service after lifetime 5% discount service charge free. </marquee>
<div>
</body>
</html>