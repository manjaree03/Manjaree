<?php @session_start();

$a=$_REQUEST["txtAmount"];
$b=$_REQUEST["txtAddress"];
$usr=$_SESSION["uname"];

include("dbConnect.php");
mysqli_query($con,"insert into order_master(cust_name,total_amount,del_address,order_status) values('$usr','$a','$b','initiate')") or die("Query Error");

?>