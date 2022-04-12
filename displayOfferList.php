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

            <div id="offerList">
            <?php
            include("dbConnect.php");
            $usr=$_SESSION["uname"];
            $rsMsg=mysqli_query($con,"select offer_id,offer_name,offer_start_dt,offer_end_dt,cat_type,offer_discount,reg_date from offer_info order by offer_id");
            echo("<table border='1'><tr><th>Offer Id</th><th>Offer name</th><th>start date</th><th>end date</th><th>category type</th><th>offer discount(in %)</th><th>reg. date</th><tr>");
            while($row=mysqli_fetch_array($rsMsg))
            {
              echo("<tr>");
                echo("<td>");
                  echo($row["offer_id"]);
				echo("</td>");
                echo("<td>");
                  echo($row["offer_name"]);
                echo("</td>");
                echo("<td>");
                  echo($row["offer_start_dt"]);
                echo("</td>");
                echo("<td>");
                  echo($row["offer_end_dt"]);
                echo("</td>");
                echo("<td>");
                  echo($row["cat_type"]);
				echo("</td>");
				echo("<td>");
                  echo($row["offer_discount"]);
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
