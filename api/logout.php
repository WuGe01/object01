<?php
session_start();
unset($_SESSION['login']);
header("Location: ../index.php?do=admin");

?>