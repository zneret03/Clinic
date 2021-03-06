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

    /*
    //forgot Password
    if(isset($_POST['sendEmail']))
    {
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "http://localhost/Clinic/php-app/build/app/includes/reset_password.php?selector=". $selector . "&validator=" . bin2hex($token);
        $expires = date("U") + 1800;

        $data_token = array(
          0 =>  $_POST['emailPass'],
          1 =>  $selector,
          2 =>  $url,
          3 =>  $expires
        );

        $data = $account->token($data_token);
        
        if(mail($data[0],$data[1],$data[2],$data[3]))
        {
            echo "success";
        }
        else
        {
            var_dump(error_get_last()['message']);
        }
    }
    else
    {
        header("Location : ../includes/Login.php");
    }
    */