<?php
    include_once '../controller/Doctorcontr.con.php';
    if(isset($_POST['data']))
    {
      $app_id = rand().date('Y');
      $doctor = new Doctorcontr();
      $data = array($app_id,$_POST['data']);
      $doctor->appointments($data);
    }