<?php  @session_start(); ?>
<?php
  include("header.php");
?>
<div id="content">
<?php  @session_start();

$a=$_SESSION["item"];
$b=$_SESSION["rate"];

$c=$_REQUEST["txtQuantity"];

$d=$_SESSION["uname"];

include("dbConnect.php");
mysqli_query($con,"insert into cart_info(item_id,item_rate,item_qty,cust_name,reg_date) values('$a','$b','$c','$d',now())") or die("Query Error");
echo("<div style='font-size:24px;padding:20px;'>");
echo("Item has been added into your cart<br><br>");
echo("Do you want to add more item into your cart ?<br><br>");

echo("<a href='index.php'>Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

echo("<a href='displayCartDetail.php'>No</a>");

$usr=$_SESSION["uname"];
$rsCart=mysqli_query($con,"select count(*) from cart_info where cust_name='$usr'");
		$row=mysqli_fetch_array($rsCart);

		$_SESSION["cart_count"]=$row[0];


echo("</div>");


?>
</div><!--end of content-->
<?php
include("footer.php");
?>