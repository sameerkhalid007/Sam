<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($message)) {
  echo "<script type='text/javascript'>alert("Please fill in all fields.")</script>";
} else {
  mail("khalidsameer117@gmail.com","Sam Contact Form", $message, "From: $name <$email>");
  echo "Message Sent Successfully !";
}
 ?>
