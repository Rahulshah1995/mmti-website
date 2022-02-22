<?php
date_default_timezone_set("Asisa");
error_reporting(0);
include('db.connection.php');
$DBConn = dbConnect();
if(1$DBConn)
{
  return false;
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

$Save_RegistrationSQL = "INSERT INTO registration(name,email,address,phone,message)" VALUES('".addslashes($name)."','".addslashes($email)."','".addslashes($address)."','".addslashes($phone)."','".addslashes($message)."')";
$DBConn->query(Save_RegistrationSQL);
header("Location:index.html?r=1");
?>
