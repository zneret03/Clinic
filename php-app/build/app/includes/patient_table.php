    <?php include_once 'header.php';?>
    <div class="container">
        <h2>Patients Medical Record</h2>
        <nav arial-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                <li class="breadcrumb-item">Patients</li>
                <li class="breadcrumb-item active" aria-current="page">Patients Record</li>
            </ul>
        </nav>
        <hr class="mt-5">
        <table class="table table-responsive table-striped table-bordered text-center  animated fadeIn" id="patientTable">
            <thead>
                <tr>
                    <th>Patients ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2020-3971-A</td>
                    <td>Ian</td>
                    <td>Adorable</td>
                    <td>Drilon</td>
                    <td>Brgy. Bolong Este Santa Barbara</td>
                    <td>09302435859</td>
                    <td>Male</td>
                    <td>1999-04-28</td>
                    <td><button type="button" id="patient_list_update" class="btn btn-primary animated bounceInDown">Update</button></td>
                    <td><button type="button" id="patient_list_delete" class="btn btn-danger animated bounceInDown">Delete</button></td>
                    <td><button type="button" id="patient_list_print" class="btn btn-success animated bounceInDown">Print</button></td>
                </tr>
                <tr>
                    <td>2020-3972-B</td>
                    <<td>Maxx</td>
                    <td>Payne</td>
                    <td>Adorable</td>
                    <td>Santa Barbara</td>
                    <td>09876542312</td>
                    <td>Male</td>
                    <td>2000-01-01</td>
                    <td><button type="button" id="patient_list_update" class="btn btn-primary animated bounceInDown">Update</button></td>
                    <td><button type="button" id="patient_list_delete" class="btn btn-danger animated bounceInDown">Delete</button></td>
                    <td><button type="button" id="patient_list_print" class="btn btn-success animated bounceInDown">Print</button></td>
                </tr>
                <tr>
                    <td>2020-3973-C</td>
                    <td>Alexandra</td>
                    <td>Pain</td>
                    <td>Maxwelt</td>
                    <td>Lapaz Jaro Iloilo City</td>
                    <td>091234567898</td>
                    <td>Female</td>
                    <td>2019-12-30</td>
                    <td><button type="button" id="patient_list_update" class="btn btn-primary animated bounceInDown">Update</button></td>
                    <td><button type="button" id="patient_list_delete" class="btn btn-danger animated bounceInDown">Delete</button></td>
                    <td><button type="button" id="patient_list_print" class="btn btn-success animated bounceInDown">Print</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include_once 'footer.php';?>