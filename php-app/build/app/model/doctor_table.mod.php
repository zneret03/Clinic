<?php
    $con = mysqli_connect('localhost','root','','clinic')
    or die("connection failed".mysqli_errno());
    
    $request = $_REQUEST;

    $col =array(
        0   =>  'doctor_id',
        1   =>  'firstname',
        2   =>  'middlename',
        3   =>  'lastname',
        4   =>  'abbreviation',
        5   =>  'doc_Address',
        6   =>  'age',
        7   =>  'gender'
    );

    $sql ="SELECT * FROM doctor";
    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);
    
    $totalFilter=$totalData;

    $sql ="SELECT * FROM doctor WHERE 1=1";
    if(!empty($request['search']['value'])){
        $sql.=" AND (doctor_id Like '%".$request['search']['value']."%' ";
        $sql.=" OR firstname Like '%".$request['search']['value']."%' ";
        $sql.=" OR middlename Like '%".$request['search']['value']."%' ";
        $sql.=" OR lastname Like '%".$request['search']['value']."%' ";
        $sql.=" OR abbreviation Like '%".$request['search']['value']."%' ";
        $sql.=" OR doc_Address Like '%".$request['search']['value']."%' ";
        $sql.=" OR age Like '%".$request['search']['value']."%' ";
        $sql.=" OR gender Like '%".$request['search']['value']."%' )";
    }

    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);

    $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

    $query = mysqli_query($con,$sql);

    $data=array();

    while($row = mysqli_fetch_array($query)){
        $subdata = array();
        $subdata[] = $row[0]; //doctor_id
        $subdata[] = $row[1]; //firstname
        $subdata[] = $row[2]; //middlename
        $subdata[] = $row[3]; //lastname    
        $subdata[] = $row[4]; //abbreviation 
        $subdata[] = $row[5]; //doc_Address 
        $subdata[] = $row[6]; //age 
        $subdata[] = $row[7]; //gender        //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
        $subdata[] = '<button type="button" id="getDoctor" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#UpdatedoctModal" data-id="'.$row[0].'">Update</button>';
        $subdata[] = '<button type="button" class="btn btn-danger" name="btnDeleteDoctor" id="btnDeleteDoctor" data-id="'.$row[0].'">Delete</button>';
        $data[] = $subdata;
    }

    $json_data=array(
        "draw"              =>  intval($request['draw']),
        "recordsTotal"      =>  intval($totalData),
        "recordsFiltered"   =>  intval($totalFilter),
        "data"              =>  $data
    );

    echo json_encode($json_data);