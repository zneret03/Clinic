<?php
    include_once '../controller/Doctorcontr.con.php';
    // save to database
    $doctor_cred = new Doctorcontr();

    if(isset($_POST['btn_save_doc']))
    {
        $id = rand();
        $date = date('Y');
        $doctor_id = $id . $date;

        $doctorCred = array(
            0 => $doctor_id,
            1 => $_POST['doc_firstname'],
            2 => $_POST['doc_middlename'],
            3 => $_POST['doc_lastname'],
            4 => $_POST['doc_abbreviation'],
            5 => $_POST['doc_address'],
            6 => $_POST['doc_age'],
            7 => $_POST['doc_gender']
        );

        //print_r($doctor);
       //$doctor = new Doctorcontr();
       $doctor_cred->setDoctor($doctorCred);
    }

    // edit doctor credintials
    if(isset($_POST['doctor_credentials']))
    {
        //$doctor_cred = new Doctorcontr();
        $doctor_cred->updateDoctor($_POST['doctor_credentials']);
        //print_r($_POST['doctor_credentials']);
    }

    //delete doctor credentials
    if(isset($_POST['doctor_id']))
    {
        //$doctor_controller = new Doctorcontr();
        $doctor_cred->deleteDoctor($_POST['doctor_id']);
        //print_r($_POST['doctor_id']);
    }