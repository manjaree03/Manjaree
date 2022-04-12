<?php
$a=$_REQUEST["txtHeading"];
$b=$_REQUEST["txtDetail"];
include("dbConnect.php");
mysqli_query($con,"insert into news_info(news_heading,news_detail,reg_date,news_status) values('$a','$b',now(),'1')") or die("Query Error");
header("location:newsForm.php?status=1");

?>