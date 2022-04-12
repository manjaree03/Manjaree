<?php @session_start();

$a=$_REQUEST["itmid"];
$b=$_REQUEST["itmrate"];

$_SESSION["item"]=$a;
$_SESSION["rate"]=$b;

if(isset($_SESSION["uname"]))
{
  header("location:quantityFormForCart.php");
  	
}
else
{
	 header("location:newLoginForm.php");
}


?>