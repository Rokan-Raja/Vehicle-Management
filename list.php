<?php
if(isset($_POST['submit']))
{
    $customer=$_POST['cu'];
    $vn=$_POST['vn'];
    $ph=$_POST['ph'];
    $type=$_POST['type'];
    $error=array();
    setcookie("customer",$customer,time()+360*60);
    setcookie("vn",$vn,time()+360*60);
    setcookie("ph",$ph,time()+360*60);
    setcookie("type",$type,time()+360*60);
    if(strlen($ph)!=10 )
    {
        $error['ph']="Enter 10 digit phone no";
    }
    if(strlen($vn)!=6)
    {
        $error['vn']="Enter 6 digit vehicle no";
    }
    if(empty($error))
    {
        $check="select *from customer_details where vehicle_no=$vn";
        $query=mysqli_query($con,$check);
        if(mysqli_num_rows($query)>0)
        {
            echo"<script>alert('You have already Account');</script>";
            header("location:home.php");
            exit();
        }
        else
        {    
            $add="insert into customer_details(customer,vehicle_no,vehicle_type,phone) values('$customer',$vn,'$type',$ph)";
            $query=mysqli_query($con,$add);
            if($query)
            {
                echo"<script>alert('Your Account created');</script>";
                header("location:home.php");
                exit();
            }
        }
    }
    }
?>