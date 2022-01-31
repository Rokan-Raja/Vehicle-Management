<?php
$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicebill</title>
    <link rel="stylesheet" href=".\bootstrap\css\bootstrap.css">
</head>
<body>
<center>
    <h1>Vehicle Service Bill</h1><br><br>
    <table border="1px" cellpadding="10px" width="100%">
    <tr>
    <th>Customer</th>
    <th>Vehicle_No</th>
    <th>Service_Type</th>
    <th>Price</th>
    </tr>';
if(!isset($_COOKIE["customer"]))
{
    header("location:index.php");
    exit();
}
else
{
    include("connect.php");
    $vn=$_COOKIE["svn"];
    $id=$_COOKIE['id'];
    $date=$_COOKIE['date'];
    $check="select *from service_bill where vehicle_no=$vn and id=$id";
    $query=mysqli_query($con,$check);
    $row=mysqli_fetch_assoc($query);
    $html.='
    <tr align="center">
    <td style="text-transform:uppercase">'.$row['customer'].'</td>
    <td>'.$row['vehicle_no'].'</td>
    <td style="text-transform:uppercase">'.$row['service_type'].'</td>
    <td>'.$row['price'].'</td>
    </tr>';
}
$html.='</table>
</center>
<br>
<br>
<p>Date:</p>
<span>'.$date.'<span>
</body>
</html>';
?>
<?php
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("service",array("Attachment"=>0));
?>