<?php @session_start();

$a=$_REQUEST["txtAmount"];
$b=$_REQUEST["txtAddress"];
$usr=$_SESSION["uname"];

include("dbConnect.php");

mysqli_query($con,"insert into order_master(cust_name,order_date,total_amount,del_address,order_status,last_update_date) values('$usr',now(),'$a','$b','initiate',now())") or die("Query Error");


$rsOrder=mysqli_query($con,"select max(order_id	) from order_master");
$row=mysqli_fetch_array($rsOrder);
$id=$row[0];

$rsCart=mysqli_query($con,"select * from cart_info where cust_name='$usr' order by cart_id ");
while($rowA=mysqli_fetch_array($rsCart))
{
   $a=$rowA["item_id"];
   $b=$rowA["item_rate"];	
   $c=$rowA["item_qty"];	
   mysqli_query($con,"insert into order_detail(item_id,item_rate,item_qty,ref_order_id) values('$a','$b','$c','$id')");
}

mysqli_query($con,"delete from cart_info where cust_name='$usr'");

$_SESSION["cart_count"]=0;

header("location:displayOrderDetail.php?ordid=$id");


?>