<?php
require_once 'connect.php';
require_once 'functions.php';
session_start();

$user_name = clearStringField($_POST['user_name']);
$user_surname = clearStringField($_POST['user_surname']);
$user_password = clearStringField(preg_match("/[0-9]/", $_POST['user_password']));
$user_confirm_password = clearStringField(preg_match("/[0-9]/", $_POST['user_confirm_password']));
if(preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $_POST['user_email']))
    $user_email = clearStringField($_POST['user_email']);

$user_date = $_POST['user_date'];
$user_gender = $_POST['user_gender'];
$user_phone = clearStringField($_POST['user_phone']);

if(!empty($user_name && $user_surname && $user_password && $user_email && $user_date && $user_gender && $user_phone) && $user_password === $user_confirm_password){
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $insert_user = "INSERT INTO users (user_name, user_surname, user_password, user_email, user_date, user_gender, user_phone) VALUES " .
    " ('{$user_name}', '{$user_surname}', '{$hash_password}', '{$user_email}', '{$user_date}', '{$user_gender}', '{$user_phone}')";
    mysqli_real_escape_string($connect, $insert_user);
    mysqli_query($connect, $insert_user);
    $_SESSION['user_name'] = $user_name;
    header('Location: ../index.php?account=done&id=' . mysqli_insert_id($connect));
    mysqli_close($connect);
    exit;
}
header('Location: ../index.php');


// Authorization and Authentication difference
// if(isset($_GET['submit'])){}
// mysqli_insert_id()

