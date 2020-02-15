<?php
    include_once 'User.mod.php';
    /*
    * connect to the database
    * set array for user table
    * Make a server searching processing
    set to array to put update and delete buttons
    */
    $con = mysqli_connect('localhost','root','','clinic')
    or die("connection failed".mysqli_errno());
    
    $request = $_REQUEST;

    $col =array(
        0   =>  'user_code',
        1   =>  'user_email',
        2   =>  'username',
        3   =>  'fname',
        4   =>  'mname',
        5   =>  'lname',
        6   =>  'usertype'
    );

    $sql ="SELECT * FROM users";
    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);
    
    $totalFilter=$totalData;

    $sql ="SELECT * FROM users WHERE 1=1";
    if(!empty($request['search']['value'])){
        $sql.=" AND (user_code Like '%".$request['search']['value']."%' ";
        $sql.=" OR user_email Like '%".$request['search']['value']."%' ";
        $sql.=" OR username Like '%".$request['search']['value']."%' ";
        $sql.=" OR fname Like '%".$request['search']['value']."%' ";
        $sql.=" OR mname Like '%".$request['search']['value']."%' ";
        $sql.=" OR lname Like '%".$request['search']['value']."%' ";
        $sql.=" OR usertype Like '%".$request['search']['value']."%' )";
    }

    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);

    $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

    $query = mysqli_query($con,$sql);

    $data=array();

    while($row = mysqli_fetch_array($query)){
        $subdata = array();
        $subdata[] = $row[0]; //user_code
        $subdata[] = $row[1]; //user_email
        $subdata[] = $row[2]; //username
        $subdata[] = $row[3]; //fname    
        $subdata[] = $row[4]; //mname 
        $subdata[] = $row[5]; //lname 
        $subdata[] = $row[7]; //usertype        //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
        $subdata[] = '<button type="button" id="getAccount" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#UpdateuserModal" data-id="'.$row[0].'">Edit</button>';
        $subdata[] = '<button type="button" class="btn btn-danger" name="btnUpdateAccount" id="btnDeleteAccount" data-id="'.$row[0].'">Delete</button>';
        $data[] = $subdata;
    }

    $json_data=array(
        "draw"              =>  intval($request['draw']),
        "recordsTotal"      =>  intval($totalData),
        "recordsFiltered"   =>  intval($totalFilter),
        "data"              =>  $data
    );

    echo json_encode($json_data);