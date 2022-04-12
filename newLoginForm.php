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
<form method="get" action="newCheckLogin.php">
<table>
<tr>  <td> <label>Enter your user name</label> </td> <td> <input type="text" name="txtUser">  </td> </tr>
<tr>  <td> <label>Enter your password</label> </td> <td> <input type="password" name="txtPassword" />  </td> </tr>
<tr>  <td> <input type="submit" value="Ok"> </td> <td> <input type="reset" value="Cancel">  </td> </tr>

</table>

</form>
</div><!--end of --myForm-->
<div>&nbsp;</div>

</div><!--end of content-->
<?php
include("footer.php");
?>
