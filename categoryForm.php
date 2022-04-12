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
		else if($_REQUEST["status"]==2)
		{
			echo("User Name already exist... change username.");
		}
		echo("</div>");
	}
?>
       
        <div id="myForm">
        <form method="post" action="insertCategory.php" enctype="multipart/form-data">
        <table>
        <tr><td>Enter Category Name :</td><td><input type="text" name="txtName" />  </td></tr>
        <tr><td>Enter Category Display Name :</td><td> <input type="text" name="txtDName" /> </td></tr>
        <tr><td>Choose Category Image :</td><td> <input type="file" name="flCategory" /> </td></tr>
        <tr><td>Choose Category Type :</td><td> 
        		<select name="cmbType">
                <option value="P">Primary</option>
                <option value="S">Secondary</option>
                </select> </td></tr>
         <tr><td>Choose Parent Category :</td><td> 
        		<select name="cmbParent">
                <option value="0">ChooseParent Name</option>
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

