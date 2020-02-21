<?php
    $con = mysqli_connect('localhost','root','','clinic')
    or die("connection failed".mysqli_errno());
    
    function sqlQuery()
    {
        $sql ="SELECT * FROM doctor";
        return $sql;
    }

    $request = $_REQUEST;

    $col =array(
        0   =>  'doctor_id',
        1   =>  'fname',
        2   =>  'mname',
        3   =>  'lname',
        4   =>  'abbreviation',
        5   =>  'doc_Address',
        6   =>  'age',
        7   =>  'gender'
    );

    $sql = sqlQuery();
    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);
    
    $totalFilter=$totalData;

    $sql.= " WHERE 1=1";
    if(!empty($request['search']['value'])){
        $sql.=" AND (doctor_id Like '%".$request['search']['value']."%' ";
        $sql.=" OR fname Like '%".$request['search']['value']."%' ";
        $sql.=" OR mname Like '%".$request['search']['value']."%' ";
        $sql.=" OR lname Like '%".$request['search']['value']."%' ";
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