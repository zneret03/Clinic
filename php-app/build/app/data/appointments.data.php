<?php
    include_once '../controller/Doctorcontr.con.php';
    //Global variable
    $doctor = new Doctorcontr();

    if(isset($_POST['submitAppointment']))
    {
      $app_id = rand().date('Y');
      $payments_time = array(
        $_POST['total'],//Payments
        $_POST['appointments'] //Appointments_time
      );

      $lastinsertedId = $doctor->payment_appointmentTime($payments_time);
      $lastinsert_appointments_time = implode(" ",$lastinsertedId[0]);
      $lastinsert_payments = implode(" ",$lastinsertedId[1]);

      $data_user = array(
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
        $lastinsert_payments,
        $lastinsert_appointments_time 
      );

      //print_r($data);

      $doctor->appointments($data_user);
    }

    //pass data to update
    if(isset($_POST['updateAppointments']))
    {
      $doctor->setAppointmentsCredentials($_POST['updateAppointments']);
    }