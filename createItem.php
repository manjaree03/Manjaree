<?php
$a=$_REQUEST["txtItemName"];
$b=$_FILES["flItem"];
$c=$_REQUEST["txtRate"];
$d=$_REQUEST["txtDiscount"];
$e=$_REQUEST["txtDetail"];
$f=$_REQUEST["cmbParent"];

$img=$b["name"];
move_uploaded_file($b["tmp_name"],".\\item\\$img");

include("dbConnect.php");

mysqli_query($con,"insert into item_info(item_name,item_img,item_rate,item_discount,item_detail,item_cat,item_date) values('$a','$img','$c','$d','$e','$f',now())") or die("query error");

header("location:createItemForm.php?status=1");



?>