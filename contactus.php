<?php
$name = $_REQUEST['Name'];
$contact = $_REQUEST['Contact'];
$email = $_REQUEST['mail'];
$pincode = $_REQUEST['Pin'];
$address = $_REQUEST['address'];
$country = $_REQUEST['country'];
$message = $_REQUEST['Message'];

if(empty($name) || empty($contact) || empty($email) || empty($pincode) || empty($address) || empty($country) || empty($message))
{
echo "Please fill all the fields";
}
else
{
mail("info@akstrainingcumplacement.com","Email Message",$message,"From: $name <$email> <$contact> <$pincode> <$address> <$country>");
}
?>