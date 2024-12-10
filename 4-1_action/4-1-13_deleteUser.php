<?php

include "../4-3_classes/4-3-2_User.php";

$id = $_POST['user_id'];

$obj = new User;
$obj->deleteUser($id);

?>