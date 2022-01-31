<?php
if(!isset($_COOKIE['customer']))
{
    header("location:index.php");
    exit();
}
else
{
include("connect.php");
if(isset($_COOKIE['date']))
{
$date=$_COOKIE['date'];
$vn=$_COOKIE['vn'];
$check="select *from service_bill where vehicle_no=$vn and date='$date'";
$query=mysqli_query($con,$check);
if(mysqli_num_rows($query)>0)
{
$row=mysqli_fetch_assoc($query);
echo"<script>alert('Your last service date is ".$row['date']."');</script>";
}
sleep(3);
}
include("bill.php");
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
    <link rel="stylesheet" href=".\css\form2.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand text-uppercase"><?php if(isset($_COOKIE['customer'])){echo $_COOKIE['customer'];} ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="service.php">Service<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="text-decoration-none text-light" href="index.php">Logout</a>
    </form>
  </div>
</nav>
<h1 class="text-center">Service</h1>
<div id="main">
<form class="form" method="POST" action="">
<input type="text"class="input" readonly name="cu" value="<?php if(isset($_COOKIE['customer'])){echo $_COOKIE['customer'];} ?>"><br>
<input type="text"class="input"readonly name="vn" value="<?php if(isset($_COOKIE['vn'])){echo $_COOKIE['vn'];} ?>"><br>
<input type="text"class="input" readonly name="type" value="<?php if(isset($_COOKIE['type'])){echo $_COOKIE['type'];} ?>"><br>
<input type="text"class="input" readonly name="ph" value="<?php if(isset($_COOKIE['ph'])){echo $_COOKIE['ph'];} ?>"><br>
<select class="input"name="stype">
<option value="water_wash">Water wash</option>
<option value="dent_removal">Dent removal</option>
<option value="tyre_change">Tyre change</option>
</select><br>
<input type="submit" value="Service" name="submit">
</form>
</div>
</body>
</html>