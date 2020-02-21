    <?php
    $con = mysqli_connect('localhost','root','','clinic')
    or die("connection failed".mysqli_errno());
    
    function sqlQuery()
    {
        $sql ="SELECT * FROM medicine";
        return $sql;
    }

    $request = $_REQUEST;

    $col =array(
        0   =>  'medicine_code',
        1   =>  'medicine_name',
        2   =>  'medicine_Brand',
        3   =>  'unit',
        4   =>  'quantity',
        5   =>  'other_name',
        6   =>  'description'
    );

    $sql = sqlQuery();
    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);
    
    $totalFilter=$totalData;

    $sql.= " WHERE 1=1";
    if(!empty($request['search']['value'])){
        $sql.=" AND (medicine_code Like '%".$request['search']['value']."%' ";
        $sql.=" OR medicine_name Like '%".$request['search']['value']."%' ";
        $sql.=" OR medicine_Brand Like '%".$request['search']['value']."%' ";
        $sql.=" OR unit Like '%".$request['search']['value']."%' ";
        $sql.=" OR quantity Like '%".$request['search']['value']."%' ";
        $sql.=" OR other_name Like '%".$request['search']['value']."%' ";
        $sql.=" OR description Like '%".$request['search']['value']."%' )";
    }

    $query = mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($query);

    $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

    $query = mysqli_query($con,$sql);

    $data=array();

    while($row = mysqli_fetch_array($query)){
        $subdata = array();
        $subdata[] = $row[0]; //medicine_code
        $subdata[] = $row[1]; //medicine_name
        $subdata[] = $row[2]; //medicine_Brand
        $subdata[] = $row[3]; //unit    
        $subdata[] = $row[4]; //quantity 
        $subdata[] = $row[5]; //other_name 
        $subdata[] = $row[6]; //description        //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
        $subdata[] = '<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#updateMedicine" data-id="'.$row[0].'">Edit</button>';
        $subdata[] = '<button type="button" class="btn btn-danger" name="btnUpdateMedicine" id="btnDeleteMedicine" data-id="'.$row[0].'">Delete</button>';
        $data[] = $subdata;
    }

    $json_data=array(
        "draw"              =>  intval($request['draw']),
        "recordsTotal"      =>  intval($totalData),
        "recordsFiltered"   =>  intval($totalFilter),
        "data"              =>  $data
    );

    echo json_encode($json_data);