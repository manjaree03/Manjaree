<?php @session_start(); ?>
<html>
<head>
<link href="style/base.css" rel="stylesheet" type="text/css" >
<link href="style/base2.css" rel="stylesheet" type="text/css" >
</head>
<body>

<div id="main">
	<div id="header">
		<div id="leftlogo">
        <img src="images/leftlogo.jpg"></img>
        </div><!--end of leftlogo-->
        
        <div id="title">
        	<h1><a href="index.php">Manjaree Mart</a></h1>
            <h3>A trusted place for quality product.</h3>
            <?php 
			 if(isset($_SESSION["uname"]))
			 {
			 echo("Welcome ".$_SESSION["uname"]." , ");
			 echo("<a href='logout.php'>Logout</a>");
			  echo("&nbsp;&nbsp;&nbsp;&nbsp;");
		 echo("<a href='displayCartDetail.php'>");
		 echo("<img src='.\\images\\cart.png' width='40' height='40' align='bottom'>");
	/*	 echo("<span style='background-color:orange;color:black;padding:10px;'>");    */
		 echo("&nbsp;".$_SESSION["cart_count"]."&nbsp;");
		 echo("</span>");
		 echo("</a>");
		 echo("&nbsp;&nbsp;<a href='userChoice.php'>User-HOME</a>");
		 if($_SESSION["uname"]=="mm")	 
		 echo("&nbsp;&nbsp;&nbsp;&nbsp;<a href='adminChoice.php'>Admin-HOME</a>");
			 }
			 ?>
        </div><!--end of title-->
        
        <div id="rightlogo">
        <img src="images/rightlogo.png"></img>
        </div><!--end of rightlogo-->
    
    </div><!--end of header-->
