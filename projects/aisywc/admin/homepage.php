<?php 

error_reporting(E_ERROR);
session_start();
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
// Be sure to check that this manager SESSION value is in fact in the database
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); // filter everything but numbers and letters
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); // filter everything but numbers and letters
// Run mySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database  
include "../storescripts/connect_to_mysql.php"; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); // query the person
// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
$existCount = mysql_num_rows($sql); // count the row nums

?>
<?php if (isset($_POST['submit1'])) {$text = mysql_real_escape_string($_POST['editor1']); $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=1"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit2'])) {$text = mysql_real_escape_string($_POST['editor2']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=2"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit3'])) {$text = mysql_real_escape_string($_POST['editor3']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=3"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit4'])) {$text = mysql_real_escape_string($_POST['editor4']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=4"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit5'])) {$text = mysql_real_escape_string($_POST['editor5']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=5"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit6'])) {$text = mysql_real_escape_string($_POST['editor6']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=6"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit7'])) {$text = mysql_real_escape_string($_POST['editor7']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=7"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit8'])) {$text = mysql_real_escape_string($_POST['editor8']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=8"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit9'])) {$text = mysql_real_escape_string($_POST['editor9']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=9"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit10'])) {$text = mysql_real_escape_string($_POST['editor10']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=10"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit11'])) {$text = mysql_real_escape_string($_POST['editor11']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=11"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit12'])) {$text = mysql_real_escape_string($_POST['editor12']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=12"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit13'])) {$text = mysql_real_escape_string($_POST['editor13']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=13"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit14'])) {$text = mysql_real_escape_string($_POST['editor14']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=14"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit15'])) {$text = mysql_real_escape_string($_POST['editor15']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=15"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit16'])) {$text = mysql_real_escape_string($_POST['editor16']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=16"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit17'])) {$text = mysql_real_escape_string($_POST['editor17']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=17"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit18'])) {$text = mysql_real_escape_string($_POST['editor18']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=18"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit19'])) {$text = mysql_real_escape_string($_POST['editor19']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=19"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit20'])) {$text = mysql_real_escape_string($_POST['editor20']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=20"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit21'])) {$text = mysql_real_escape_string($_POST['editor21']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=21"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit22'])) {$text = mysql_real_escape_string($_POST['editor22']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=22"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit23'])) {$text = mysql_real_escape_string($_POST['editor23']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=23"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit24'])) {$text = mysql_real_escape_string($_POST['editor24']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=24"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit25'])) {$text = mysql_real_escape_string($_POST['editor25']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=25"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit26'])) {$text = mysql_real_escape_string($_POST['editor26']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=26"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit27'])) {$text = mysql_real_escape_string($_POST['editor27']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=27"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit28'])) {$text = mysql_real_escape_string($_POST['editor28']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=28"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit29'])) {$text = mysql_real_escape_string($_POST['editor29']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=29"); header("location: homepage.php");  exit(); } ?>
<?php if (isset($_POST['submit30'])) {$text = mysql_real_escape_string($_POST['editor30']);  $sql = mysql_query("UPDATE homepage SET text='$text' WHERE id=30"); header("location: homepage.php");  exit(); } ?>


<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Home Page</title>
	   <link rel="stylesheet" href="./Dashboard _ Admin Panel_files/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./Dashboard _ Admin Panel_files/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="./Dashboard _ Admin Panel_files/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./Dashboard _ Admin Panel_files/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="./Dashboard _ Admin Panel_files/my.css">
	<script src="ckeditor.js"></script>
	<script src="sample.js"></script>
	<link rel="stylesheet" href="neo.css">
	<style>
	.cke_contents
	{
		height:300px;
	}
	</style>
</head>
<body id="main">
 
           
            <h2>Edit Home Page</h2>   
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li>
                                <a href="index.php">
                                    <i class="fa fa-th"></i><span>Dashboard</span> 
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-dashboard"></i><span>Edit Website Pages</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="homepage.php"><i class="fa fa-circle-o"></i>Manage Home Page</a></li>
                                   
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-pie-chart"></i>
                                    <span>Settings</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="changepassword.php"><i class="fa fa-circle-o"></i>Change Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-pie-chart"></i>
                                    <span>Log out</span>
                                   
                                </a>
                               
                            </li>


                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

<form method="post" action="homepage.php"><form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
			<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=1 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}?>
				<textarea name="editor1"  class="ckeditor">
				
							  <?php echo $text;?>
				</textarea>
				
   <script type="text/javascript">
      CKEDITOR.replace( 'editor1' );
      CKEDITOR.add            
   </script>
			
			</div>
		
		</div>
	
	</div>
<input type="submit" name="submit1" value="UPDATE">
	</form>
	</div>
	
	
	 
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor2" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=2 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor2' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit2" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor3" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=3 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor3' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit3" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor4" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=4 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor4' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit4" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor5" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=5 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor5' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit5" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor6" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=6 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor6' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit6" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor7" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=7 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor7' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit7" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor8" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=8 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor8' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit8" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor9" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=9 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor9' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit9" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor10" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=10 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor10' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit10" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor11" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=11 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor11' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit11" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor12" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=12 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor12' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit12" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor13" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=13 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor13' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit13" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor14" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=14 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor14' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit14" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor15" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=15 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor15' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit15" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor16" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=16 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor16' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit16" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor17" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=17 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor17' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit17" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor18" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=18 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor18' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit18" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor19" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=19 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor19' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit19" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor20" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=20 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor20' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit20" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor21" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=21 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor21' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit21" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor22" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=22 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor22' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit22" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor23" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=23 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor23' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit23" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor24" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=24 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor24' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit24" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor25" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=25 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor25' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit25" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor26" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=26 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor26' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit26" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor27" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=27 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor27' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit27" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor28" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=28 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor28' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit28" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor29" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=29 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor29' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit29" value="UPDATE">
	</form>
	</div>
	 <form method="post" action="homepage.php"><div class="content-wrapper">

	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea name="editor30" class="ckeditor">
				<?php 
							  $sql = mysql_query("SELECT * FROM homepage where id=30 ");
							  while($row = mysql_fetch_array($sql)){ 
							  $text = $row["text"];}
							  echo $text;?>
				</textarea>
   <script type="text/javascript">
      CKEDITOR.replace( 'editor30' );
      CKEDITOR.add            
   </script>
			
			</div>
		</div>
	</div>
<input type="submit" name="submit30" value="UPDATE">
	</form>
	</div>
	
	
	
   <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 1.0.0
       
                    </div>
                    <strong>Copyright © 2015-2016 <a href="http://www.3dproductrender.com/admin/addnewpage.aspx?ID=1#">Bonker's Art</a>.</strong> All rights reserved.
     
                </footer>
    <!-- jQuery 2.1.4 -->
            <script src="./Dashboard _ Admin Panel_files/jQuery-2.1.4.min(1).js"></script>
            <!-- Bootstrap 3.3.5 -->
            
            <script src="./Dashboard _ Admin Panel_files/app.min.js"></script>
<script>
	initSample();
</script>

</body>
</html>
