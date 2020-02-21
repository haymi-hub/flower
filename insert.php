<?php
if(isset($_POST["subject"]))
{
include("connect.php");
$subject = mysqli_real_escape_string($con, $_POST["subject"]);
$comment = mysqli_real_escape_string($con, $_POST["message"]);
$query = "INSERT INTO `message`(`subject`, `msg`)VALUES ('$subject', '$comment')";
mysqli_query($con, $query);
}
?>
