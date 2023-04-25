<?php
session_start();
unset($_SESSION['id_ies']);
session_destroy();
header("Location:login.php");
?>