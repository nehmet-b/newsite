<?php
session_start();
unset($_SESSION['user_name']);
session_destroy();
//setcookie('user_id', '', time() - 3600 * 24, '/');
//setcookie('user_name', '', time() - 3600 * 24, '/');
header('Location: ../index.php?account=logout');
