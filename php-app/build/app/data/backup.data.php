<?php

    // not yet done
    include_once '../controller/Backupcontr.con.php';
    if(isset($_POST['btn_backup']))
    {
        $username = "root";
        $password = "";
        $host = "localhost";
        $databaseName = "clinic";
        $tables = array(
            "aclohol",
            "appointments",
            "cigarette",
            "diseases",
            "doctor",
            "druges",
            "exposure",
            "father_medical_history",
            "login_logout",
            "marital_status",
            "medical_history",
            "medications",
            "medicine",
            "mother_medical_history",
            "parents_medical_history",
            "patients",
            "sibling_medical_history",
            "users"
        );

        $date = date("y-m-d");
        $rand = rand();
        $extension = $rand."-".$date;
        $backup_name = $backup_name ? $backup_name : $name.".$extension.sql";
        header("Content-Type: application/octet-stream");
        header("COntent-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");
        echo $content; exit;
        
        $back_database = new Backupcontr();
        $back_database->export_databases($host,$username,$password,$databaseName,$tables = false,$backup_name = false);
        //print_r($backup);
    }