<?php 
    include_once '../controller/Usercontr.con.php';
    date_default_timezone_set('Asia/Singapore');

    $time = date('h:i:s A');
    $account = new Usercontr();
    //Update data from the database
    if(isset($_POST['account_data']))
    {
        $account->getAccountData($_POST['account_data']);
    }

    //get id to Delete Data from database 
    if(isset($_POST['user']))
    {
        //$getData = new Usercontr();
        $account->getAccountId($_POST['user']);
    }

    //Login 
    if(isset($_POST['btn_login']))
    {
        //$User_cred = new Usercontr();
        $user_code = $account->UserCred($_POST['username'],$_POST['password']);
        $color = "#42B72A";
        $loginTime = array(
            $user_code,
            $time,
            $color
        );

        //print_r($loginTime);
        $account->setTime($loginTime);
    }

    //logout
    if(isset($_POST['logout']))
    {
        //$logout = new Usercontr();
        $color = "#CC0000";
        $logout_time = array(
            $time,
            $color,
            $_POST['logout']
        );

        $account->getlogoutTime($logout_time);
    }

    //admin Employee time delete
    if(isset($_POST['time_id']))
    {
        //print_r($_POST['time_id']);
        $account->DeleteTmime($_POST['time_id']);
    }