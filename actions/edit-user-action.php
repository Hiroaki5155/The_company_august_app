<?php
include '../classes/User.php';

#Instantiate an object
$user = new User;

#Call an update method
$user->update($_POST,$_FILES);
//$_POST -->holds our data from the form
//$_FILES -->holds an arrays of item uploaded via the HTTP Post method (It holds our image file)
?>