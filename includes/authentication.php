<?php
require_once 'connect.php';
require_once '../signin_user.php';

$user_name = clearStringField($_POST['user_name']);

$select_user = "SELECT user_name FROM users";
$query = mysqli_query($connect, $select_user);
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);

for($i = 0; $i < count($row); $i++) {
    if ($user_name === $row[$i]['user_name']){
        header('Location: ../index.php');
    }
}

mysqli_free_result($query);