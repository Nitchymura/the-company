<?php
 
 include_once "../4-3_classes/4-3-2_User.php";

$obj = new User;
$obj->login($_POST);  //pass all data from the form
?> 