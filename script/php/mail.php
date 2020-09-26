<?php 

if (isset($POST['submit'])) {
$name = $_POST['firstName'];
$name = $POST['lastName'];
$emailFrom = $POST['useremail'];
$comment = $POST['comment'];


$mailTo = "hebianca20@gmail.com";
$headers = "From: ".$emailFrom;
$txt = "you have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $comment, $txt, $headers) or die("Error");
header("Location :index.php?mailsend");
}