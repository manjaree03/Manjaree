<?php
  include("header.php");
?>
<div id="content">

<div>&nbsp;</div>
<?php
  if(isset($_REQUEST["status"]))
  {
	echo("<div id='resMsg'>");
	  if($_REQUEST["status"]==1)
	  {
		echo("Wrong User Name");  
	  }
	  else if($_REQUEST["status"]==2)
	  {
	  echo("Wrong Password");	  
	  }
	  
	echo("</div>");  
  }
?>

<div id="myForm">
<h1>Do you really want to place order for following address ? </h1>
<form method="get" action="insertOrder.php">
<table>
<?php
 $usr=$_SESSION["uname"];
 include("dbConnect.php");
 $rsUser=mysqli_query($con,"select cust_address from customer_info where user_name='$usr'");
 
 $row=mysqli_fetch_array($rsUser);
 
 $adr=$row["cust_address"];
$a=$_REQUEST["amnt"]; 

?>
<tr> <td> <label>Total Amount </label><td><input type="text" name='txtAmount' value="<?=$a?>" readonly="readonly"> </td>
<tr>  <td> <label>Enter Delivery Address :</label> </td> <td> <textarea name='txtAddress' rows='5'><?php echo($adr); ?> </textarea></td> </tr>
<tr>  <td> <input type="submit" value="Ok"> </td> <td> <input type="reset" value="Cancel">  </td> </tr>

</table>

</form>
</div><!--end of --myForm-->
<div>&nbsp;</div>

</div><!--end of content-->
<?php
include("footer.php");
?>
