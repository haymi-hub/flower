<?php include ('connect.php');
session_start();

$user=$_POST['uname'];
//$role=$_POST['rname'];
$pass=$_POST['pass'];
$user = stripslashes($user);
$pass=  stripslashes($pass);

$user = mysqli_real_escape_string($conn,$user);

$pass = mysqli_real_escape_string($conn,$pass);

$redirect="index.html";

$fetch="SELECT id FROM user WHERE user_Name='$user' and password='$pass'";
$result = mysqli_query($conn,$fetch);
$count= mysqli_num_rows($result);

if(isset($_POST['submit'])){
if($user&$pass){
if($count!="")
{
#session_register("session_User_Name");
$_SESSION['login_User_Name']=$user;
$_SESSION['login_Password']=$pass;
$_SESSION['status']="Active";
$redirect = 'adminpage/index.html';
}
header("location:". $redirect);
}
else{
 echo'<script type="text/javascript">alert("Invalid User Name and Password")</script>';
 die("<button type='a' onclick=''><a href='index.php'>Back To Login</a></button>");
}
mysqli_close($conn);
}
else{
 echo'<script type="text/javascript">alert("Please Fill up Log In Information!")</script>';
 die("<button type='a' onclick=''><a href='index.php'>Back To Login</a></button>");
}

?>
