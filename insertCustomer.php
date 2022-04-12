<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtEmail"];
$c=$_REQUEST["txtMobile"];
$d=$_REQUEST["txtAddress"];
$e=$_REQUEST["txtUsername"];
$f=$_REQUEST["txtPassword"];
include("dbConnect.php");
$rsCust=mysqli_query($con,"select * from customer_info where user_name='$e'");

if(mysqli_num_rows($rsCust)==1)
{
	header("location:registrationForm.php?status=2");
}
else
{
	mysqli_query($con,"insert into customer_info(cust_name,cust_email,cust_mobile,cust_address, user_name, user_pass, user_type, reg_date)  values('$a','$b','$c','$d','$e','$f', 'user', now())");

	header("location:registrationForm.php?status=1");
}
?>

