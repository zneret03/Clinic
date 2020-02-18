<?php

    include_once '../model/doctor.mod.php';
    $load = new doctor();

    $appointment = $load->fetchAppointments();
    $appoint = array();
    foreach ($appointment as $value) 
    {
        $appoint[] = array(
            'id'    => $value['app_cred_id'],
            'title' => $value['firstname']. " ". $value['middlename']." ". $value['lastname'],
            'start' => $value['appointments_time']  
        );         
    }

    if(empty($appoint))
    {
        echo " "; 
    }
    else
    {
        echo json_encode($appoint);
    }
   