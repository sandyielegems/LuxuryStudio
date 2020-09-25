<?php
if(isset($_POST['reset-requist-submit'])){
 
$selector = bin2hex(random_bytes(8));
$token = bin2hex(random_bytes(32));
$url = "http://localhost/eindwerk-backup/create-new-password.php?selector=" . $selector . "&validator=" . $token;
$expires = date("U") + 1;
 
require 'dbh.inc.php'; 
 
$userEmail = $_POST["email"];
$sql ="DELETE FROM pwdReset where pwdResetEmail=?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error = sql1";
exit();
}else{
 mysqli_stmt_bind_param($stmt, "s", $userEmail);
 mysqli_stmt_execute($stmt);
}
$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) values (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error = sql2";
exit();
}else{
 
 $hashedToken = $token ;//password_hash($token, PASSWORD_DEFAULT);
 mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
 mysqli_stmt_execute($stmt);
}