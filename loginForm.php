<?php
include("header.php");
?>
<div id="content">
<div>&nbsp;</div>
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
        <form method="get" action="checkLogin.php">
        <table>
        <tr><td>Enter Your User Name :</td><td><input type="text" name="txtUsername" />  </td></tr>
        <tr><td>Enter Your Password :</td><td> <input type="password" name="txtPassword" /> </td></tr>
		<tr><td><input type="submit" value="OK" /></td><td><input type="reset" value="CANCEL" /></td></tr>  
        </table>
        </form>
        </div><!--end of myForm--> 

</div><!--end of content-->
<?php
include("footer.php");
?>
