<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["uname"]=="mm")
{
	
	

?>
<?php
include("header.php");
?>
<div id="content">
<div id="adminContent">
<div id="leftMargin">
<?php
include("adminMenu.php");
?>
</div><!--end of leftMargin-->

<div id="rightMargin">
<div>&nbsp;</div>
<?php
	if(isset($_REQUEST["status"]))
	{
		echo("<div id='resMsg'>");
		if($_REQUEST["status"]==1)
		{
			echo("Data has been saved.");
		}
		else if($_REQUEST["status"]==0)
		{
			echo("Data not saved.");
		}
		echo("</div>");
	}
?>
       
        <div id="myForm">
        <form method="post" action="createItem.php" enctype="multipart/form-data">
        <table>
        <tr><td>Enter Item Name :</td><td><input type="text" name="txtItemName" />  </td></tr>
        <tr><td>Choose Item Image :</td><td> <input type="file" name="flItem" /> </td></tr>
        <tr><td>Enter Rate of Item :</td><td> <input type="text" name="txtRate" /> </td></tr>
        <tr><td>Discount(in %) :</td><td> <input type="text" name="txtDiscount" /> </td></tr>
        <tr><td>Detail :</td><td> <input type="text" name="txtDetail" /> </td></tr>
        <tr><td>Choose Parent Category :</td><td> 
        		<select name="cmbParent">
                
                <?php
				include("dbConnect.php");
				$rsCat=mysqli_query($con,"select cat_id,cat_name from category_info order by cat_name");
				
				while($row=mysqli_fetch_array($rsCat))
				{
					 $id=$row["cat_id"];
					echo("<option value='$id'>");
					echo($row["cat_name"]);
					echo("</option>");
				}
				?>
                </select> </td></tr>
        <tr><td><input type="submit" value="OK" /></td><td><input type="reset" value="CANCEL" /></td></tr>  
        </table>
        </form>
        </div><!--end of myForm--> 


</div><!--end of rightMargin-->
</div><!--end of adminContent-->
</div><!--end of content-->
<?php
include("footer.php");
}
else
{
  header("location:loginForm.php");	
}
?>

