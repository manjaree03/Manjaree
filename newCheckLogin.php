<?php @session_start();
$a=$_REQUEST["txtUser"];
$b=$_REQUEST["txtPassword"];

include("dbConnect.php");

$rsCust=mysqli_query($con,"select * from customer_info where user_name='$a'") or die("Query Error");

if(mysqli_num_rows($rsCust)==0)
{
    header("location:newLoginForm.php?status=1");
}
else
{
	$row=mysqli_fetch_array($rsCust);
	if($row["user_pass"]==$b)
	 {
		$_SESSION["uname"]=$a;
		$_SESSION["utype"]="user";
		$rsCart=mysqli_query($con,"select count(*) from cart_info where cust_name='$a'");
		$rowA=mysqli_fetch_array($rsCart);
		$_SESSION["cart_count"]=$rowA[0];
		
		    header("location:quantityFormForCart.php");
        		 
	 }
	else
	{
		    header("location:newLoginForm.php?status=2");

	}
	
}


?>