<?php

include "../4-3_classes/4-3-2_User.php";

$obj = new User;

$obj->updateUser($_POST, $_GET['id']);



?>