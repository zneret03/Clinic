<?php
    include_once '../controller/Doctorcontr.con.php';
    if(isset($_POST['submitAppointment']))
    {
      $app_id = rand().date('Y');
      $doctor = new Doctorcontr();

      $data = array(
        $app_id,
        $_POST['firstname'],
        $_POST['middlename'],
        $_POST['lastname'],
        $_POST['address'],
        $_POST['phoneNum'],
        $_POST['user_email'],
        $_POST['description'],
        $_POST['age'],
        $_POST['gender'],
        $_POST['doctorid'],
        $_POST['total'],//Payments
        $_POST['appointments'] //Appointments_time
      );

      //print_r($data);
      $doctor->appointments($data);
    }