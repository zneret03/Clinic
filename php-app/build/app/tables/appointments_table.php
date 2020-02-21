<?php
/*
    * Fetch data from database

    * set array for user table

    * Make a server searching processing 

    * set to array to put update and delete function
*/

    $con = mysqli_connect('localhost','root','','clinic') 
    or die("connection failed".mysqli_erno());

    //return sql query
    function sqlQuery()
    {
        
        $sql = "SELECT 
        app_cred_id, 
        firstname, 
        middlename,
        lastname,
        customerAddress, 
        phoneNo, 
        Email, 
        Notes, 
        doctor.fname, 
        doctor.mname, 
        doctor.lname, 
        appointments_time, 
        bill 
        FROM appointments_credentials 
        INNER JOIN doctor ON doctor.doctor_id = appointments_credentials.doctor_id 
        INNER JOIN Appointments_time ON Appointments_time.app_time = appointments_credentials.app_time 
        INNER JOIN payments ON payments.payments_id = appointments_credentials.payments_id";

        return $sql;
    }

    $request = $_REQUEST;

    $col = array(
        0   =>  'app_cred_id',
        1   =>  'firstname',
        2   =>  'middlename',
        3   =>  'lastname',
        4   =>  'customerAddress',
        5   =>  'phoneNo',
        7   =>  'Email',
        8   =>  'Notes',
        9   =>  'doctor_id',
        10  =>  'app_time',
        11  =>  'payments_id'
    );

    $sql = sqlQuery();

    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);

    $totalFilter = $totalData;

    //Server Side Searching
    $sql."WHERE 1=1";
    if(!empty($request['search']['value']))
    {
        $sql.=" AND (app_cred_id Like '%".$request['search']['value']."%' ";
        $sql.=" OR firstname Like '%".$request['search']['value']."%' ";
        $sql.=" OR middlename Like '%".$request['search']['value']."%' ";
        $sql.=" OR lastname Like '%".$request['search']['value']."%' ";
        $sql.=" OR customerAddress Like '%".$request['search']['value']."%' ";
        $sql.=" OR Email Like '%".$request['search']['value']."%' ";
        $sql.=" OR doctor.fname Like '%".$request['search']['value']."%' )";
    }
    
    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);
    
    //ORDER BY
    $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";
    $query = mysqli_query($con,$sql);

    $data = array();

    //Return Table Data
    while($row = mysqli_fetch_array($query))
    {
        $subdata =array();
        $subdata[] = $row[0]; //Id
        $subdata[] = $row[1]. " " . $row[2]. " " . $row[3]; //User Fullname
        $subdata[] = $row[4]; //Address
        $subdata[] = $row[5]; //Phone Number
        $subdata[] = $row[6]; //Email
        $subdata[] = $row[7]; //Notes
        $subdata[] = $row['fname']." ".$row['mname']." ".$row["lname"]; //doctor_id
        $subdata[] = $row[11]; //app_time
        $subdata[] = $row[12]; //payments_id            
        $subdata[] = '<button type="button" id="getAppointments" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#UpdateappointmentsModal"  data-id="'.$row[0].'">Edit</button>';
        $subdata[] = '<button type="button" class="btn btn-danger" name="btnDeleteAppointments" id="btnDeleteAppointments" data-id="'.$row[0].'">Delete</button>';
        $data[] = $subdata;
    }

    
    $json_data = array(
        "draw"              =>  intval($request['draw']),
        "recordsTotal"      =>  intval($totalData),
        "recordsFiltered"   =>  intval($totalFilter),
        "data"              => $data  
    );


    echo json_encode($json_data);