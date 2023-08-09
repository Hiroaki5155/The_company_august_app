<?php
include "../classes/User.php";//include the User.php class file

# Instantiate object
$user = new User;

#Instantiate/Create the object
$user->login($_POST);//we will create this method in User.php
//$_POST --->holds the data coming from the login form
?>