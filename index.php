<?php
include("connect.php");
include("list.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
    <link rel="stylesheet" href=".\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href=".\css\form.css">
</head>
<body>
<center><h1>Vehicle Management</h1></center>
<div id="main">
<h1>Customer Details</h1><br>
<form class="form" method="POST" action="">
<input type="text"class="input"autocomplete="off" placeholder="Customer" required name="cu"><br>
<p></p>
<input type="number"class="input" placeholder="Vehicle_no" required name="vn"><br>
<p><?php if(isset($error['vn'])){ echo $error['vn']; }?></p>
<input type="number"class="input" placeholder="Phone" required name="ph"><br>
<p><?php if(isset($_error['ph'])){ echo $error['ph']; }?></p>
<select class="input"name="type">
<option>2wheeler</option>
<option>3wheeler</option>
<option>4wheeler</option>
</select><br>
<input type="submit" value="Enter" name="submit">
</form>
</div>
</body>
</html>