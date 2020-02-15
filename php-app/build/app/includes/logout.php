<?php
    include_once '../auto/auto_load.auto.php';
    session_start();
    unset($_SESSION['userID']);
    {
        header("Location:Login.php");
    }
?>