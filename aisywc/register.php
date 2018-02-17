<?php 
// Script Error Reporting
error_reporting(E_ERROR);
ini_set('display_errors', '1');
?>
<?php 
if(isset($_POST['submit']))
{
include "connect_to_mysql.php"; 
$name=$_POST["name"];
$email = $_POST["email"];
$sql = mysql_query("SELECT id FROM registrants WHERE email='$email' LIMIT 1");
	$productMatch = mysql_num_rows($sql); // count the output amount
    if ($productMatch > 0) {
		echo '<div class="b-shortcode-example">
            <div class="b-alert-warning f-alert-warning">
              <div class="b-right">
                
              </div>
              <div class="b-remaining">
                <i class="fa fa-exclamation-triangle"></i> Sorry, This Email Address is already Registered
              </div>
            </div>
          </div>
';

	header("location: fail.html");	
	}
	else
	{
$phn = mysql_real_escape_string($_POST["phone"]);
$category = mysql_real_escape_string($_POST["category"]);
$cllgname = mysql_real_escape_string($_POST["cllgname"]);
$cllgcity = mysql_real_escape_string($_POST["cllgcity"]);
$message = mysql_real_escape_string($_POST["message"]);
$message1 = mysql_real_escape_string($_POST["message1"]);
$message2 = mysql_real_escape_string($_POST["message2"]);
$gender = mysql_real_escape_string($_POST["gender"]);
$mem = mysql_real_escape_string($_POST["mem"]);
$yrs = mysql_real_escape_string($_POST["yrs"]);
$attend = mysql_real_escape_string($_POST["attend"]);
$section = mysql_real_escape_string($_POST["section"]);
$member = mysql_real_escape_string($_POST["member"]);
if($state=="")
{
	$state = $otherstate;
}

if($college=="" && $state1=="")
{
	$college = $othercllg;
}
else if($state1!="")
	$college = $state1;
$sql = "INSERT INTO `registrants`(`name`, `email`, `phone`, `category`, `cllgname`, `cllgcity`, `section`, `ques1`, `ques2`, `ques3`, `gender`, `membership`, `yrs`, `attend`, `member`) VALUES ('$name', '$email', '$phn', '$category','$cllgname', '$cllgcity', '$section', '$message', '$message1', '$message2', '$gender', '$mem', '$yrs', '$attend', '$member')";


 $result = mysql_query($sql) or die(mysql_error());
$ida= mysql_insert_id();

if($ida!=0){
$email_message= 'Dear '.$name.',
 
Thank you for registering for the IEEE All India Student-Young Professionals-WIE Congress 2017. We have recorded your information.
 
Your registration ID is: '.$ida.'. 
In case of any query, please mention this registration ID while contacting us.
 

Stay tuned for further updates:
www.aisywc.in
www.facebook.com/aisywc


Best wishes,
IEEE AISYWC Team

';}
else if($id1==0)
{$email_message='Dear '.$name.',
 
Thank you for registering for the IEEE All India Student-Young Professionals-WIE Congress 2017. 

We have recorded your information.
Your unique Registration ID will be shared with you shortly. 

Stay tuned for further updates:
www.aisywc.in
www.facebook.com/aisywc


Best wishes,
IEEE AISYWC Team

';}
$xyz="'.$name.'
 '.$email.' 
'.$phn.' 
'.$ida.'
 '.$category.' 
'.$cllgname.' 
'.$cllgcity.' 
'.$cllgorg.' 
'.$message.'
 '.$message1.' 
'.$message2.' 
'.$message3.'
 '.$gender.'
 '.$mem.' 
'.$yrs.' 
'.$attend.";
$email_to = "info@aisywc.in";
$email_subject = "IEEE All India Student/YP/WIE Congress 2017- Phase 1 Registration";
$redirect  = $_POST['redirect'];
$headers = 'MIME-Version: 1.0' . "\ r\n";
$headers .= ' Content-type: text/html; charset=iso-8859-1' . "\ r\n";
$headers = 'From: '.$email_to."\r\n".
$headers .= 'bcc: aisywc.iiita@gmail.com' . "\r\n";

 
@mail($email, $email_subject, $email_message, $headers);  
@mail($email_to, $email_subject, $xyz, $headers);  
  echo '<div class="b-alert-success f-alert-success">
              <div class="b-right">
                <i class="fa fa-times-circle-o"></i>
              </div>
              <div class="b-remaining">
                <i class="fa fa-check-circle-o"></i> Thank you for Registering in Phase 1. We have recorded your information. 
              </div>
            </div>
';
header("location: success.html");
	}
}

?>