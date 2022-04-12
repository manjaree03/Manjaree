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
            
</div> <!--leftMargin-->
<div id="rightMargin">

            <div id="customerList">
            <?php
            include("dbConnect.php");
            $usr=$_SESSION["uname"];
            $rsMsg=mysqli_query($con,"select cust_id,cust_name,cust_email,cust_mobile,cust_address,user_name,reg_date from customer_info order by cust_id");
            echo("<table border='1'><tr><th>Customer Id</th><th>Name</th><th>Email</th><th>mobile num</th><th>Address</th><th>Username</th><th>Reg. Date</th><tr>");
            while($row=mysqli_fetch_array($rsMsg))
            {
              echo("<tr>");
                echo("<td>");
                  echo($row["cust_id"]);
				echo("</td>");
                echo("<td>");
                  echo($row["cust_name"]);
                echo("</td>");
                echo("<td>");
                  echo($row["cust_email"]);
                echo("</td>");
                echo("<td>");
                  echo($row["cust_mobile"]);
                echo("</td>");
                echo("<td>");
                  echo($row["cust_address"]);
				echo("</td>");
				echo("<td>");
                  echo($row["user_name"]);
				echo("</td>");
				echo("<td>");
                  echo($row["reg_date"]);
				echo("</td>");
              echo("</tr>");
            }
            echo("</table>");
            
            
            ?>
            </div><!--end of customerList-->


</div><!--rightMargin-->
</div><!--adminContent-->

</div><!--end of content-->
<?php
include("footer.php");

}
else
{
  header("location:loginForm.php");	
}
?>
