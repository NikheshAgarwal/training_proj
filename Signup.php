<?php
$name = $_REQUEST['Name'];
$contact = $_REQUEST['contact'];
$Email = $_REQUEST['email'];
$PinCode = $_REQUEST['pin'];
$Address = $_REQUEST['address'];
$Country = $_REQUEST['country'];
$Password = $_REQUEST['password'];
$Confirm_Password = $_REQUEST['confirm_password'];

if(empty($name) || empty($contact) || empty($Email) || empty($PinCode) || empty($Address) || empty($Country) || empty($Password) || empty($Confirm_Password))
{
echo "Please fill all the fields";
}
if($Password != $Confirm_Password)
{
echo "<script type='text/javascript'>alert('Please check the password')</script>";
}
else
{
mail("info@akstrainingcumplacement.com","Email Message", "From: $name <$Email> <$contact> <$PinCode> <$Address> <$Country> <$Password> <$Confirm_Password>");
}
