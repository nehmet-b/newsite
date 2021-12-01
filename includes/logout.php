<?php
session_start();
unset($_SESSION['user_name']);
session_destroy(); // delete this
header('Location: ../index.php?account=logout');
