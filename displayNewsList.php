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

            <div id="newsList">
            <?php
            include("dbConnect.php");
            $usr=$_SESSION["uname"];
            $rsMsg=mysqli_query($con,"select news_id,news_heading,news_detail,reg_date,news_status from news_info order by news_id");
            echo("<table border='1'><tr><th>News Id</th><th>News Heading</th><th>News Detail</th><th>Reg. date</th><th>Status</th><tr>");
            while($row=mysqli_fetch_array($rsMsg))
            {
              echo("<tr>");
                echo("<td>");
                  echo($row["news_id"]);
				echo("</td>");
                echo("<td>");
                  echo($row["news_heading"]);
                echo("</td>");
                echo("<td>");
                  echo($row["news_detail"]);
                echo("</td>");
                echo("<td>");
                  echo($row["reg_date"]);
                echo("</td>");
                echo("<td>");
                  echo($row["news_status"]);
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
