<?php @session_start();
$a=$_REQUEST["cid"];
include("dbConnect.php");
mysqli_query($con,"delete from cart_info where cart_id='$a'");

$usr=$_SESSION["uname"];
$rsCart=mysqli_query($con,"select count(*) from cart_info where cust_name='$usr'");
		$row=mysqli_fetch_array($rsCart);

		$_SESSION["cart_count"]=$row[0];

header("location:displayCartDetail.php");

?>