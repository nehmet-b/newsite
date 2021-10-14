<?php
require_once 'connect.php';
require_once 'functions.php';
//require_once 'authentication.php';

session_start();

$user_name = clearStringField($_POST['user_name']);
$user_password = clearStringField(preg_match("/[0-9]/", $_POST['user_password']));

if(!empty($user_name && $user_password)) {
    $select_user = "SELECT user_id, user_name, user_password FROM users";
    $query = mysqli_query($connect, $select_user);
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    for($i = 0; $i < count($row); $i++){
        if($user_name === $row[$i]['user_name'] && password_verify($user_password, $row[$i]['user_password'])){
            $user_id = $row[$i]['user_id'];
            $_SESSION['user_name'] = $user_name;
            header('Location: ../index.php?signin=done&id=' . $user_id);
            exit;
        } elseif ($user_name !== $row[$i]['user_name'] || !password_verify($user_password, $row[$i]['user_password'])){
            unset($_SESSION['user_name']);
        }
    }
    mysqli_free_result($query);
    mysqli_close($connect);
}
header('Location: ../index.php');