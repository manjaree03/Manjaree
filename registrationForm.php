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
			echo("Data has been saved.");
		}
		else if($_REQUEST["status"]==2)
		{
			echo("User Name already exist... change username.");
		}
		echo("</div>");
	}
?>
       
        <div id="myForm">
        <form method="get" action="insertCustomer.php">
        <table>
        <tr><td>Enter Your Name :</td><td><input type="text" name="txtName" />  </td></tr>
        <tr><td>Enter Your Email Address :</td><td> <input type="text" name="txtEmail" /> </td></tr>
        <tr><td>Enter Your Mobile Number :</td><td> <input type="text" name="txtMobile" /> </td></tr>
        <tr><td>Enter Your Address :</td><td> <textarea name="txtAddress" rows="4" cols="40"/></textarea> </td></tr>
        <tr><td>Enter Your User-Name :  </td><td><input type="text" name="txtUsername" />  </td></tr>
        <tr><td>Enter Your Password :  </td><td> <input type="password" name="txtPassword" /> </td></tr>
        <tr><td><input type="submit" value="OK" /></td><td><input type="reset" value="CANCEL" /></td></tr>  
        </table>
        </form>
        </div><!--end of myForm--> 
</div><!--end of content-->
<?php
include("footer.php");
?>
