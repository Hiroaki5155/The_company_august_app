
<?php
include "../classes/user.php";
//create a new obj/instance
$user =new User;

//call the method
$user ->store($_POST);


?>