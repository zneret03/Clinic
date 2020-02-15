<?php
    include_once '../controller/Medicinecontr.con.php';
    //Delete data from database
    if(isset($_POST['delete_medicine']))
    {
        $delete = new Medicinecontr();
        $delete->delete_data_medicine($_POST['delete_medicine']);
    }
    
    //Update Data from database
    if(isset($_POST['medicine_data']))
    {
        $medicine_controller = new Medicinecontr();
        $medicine_controller->set_data_Medicine($_POST['medicine_data']);     
    }