<?php
public function update(){
global $database;
$sql = "UPDATE users SET ";
$sql .= "uidUsers= '" . $database->escape_string($this->uidUsers) . "', ";
$sql .= "emailUsers= '" . $database->escape_string($this->emailUsers) . "', ";
$sql .= "pwdUsers= '" . $database->escape_string($this->pwdUsers) . "', ";
$sql .= "users_type= '" . $database->escape_string($this->users_type) . "', ";
$sql .= "WHERE idUsers= '" . $database->escape_string($this->idUsers);

$database->query($sql);
return (mysqli_affected_rows($database->connection) == 1)? true : false;
}