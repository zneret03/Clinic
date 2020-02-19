    <?php session_start();
    include_once '../view/Userview.view.php';
    $id = new Userview();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Styles-->
        <!--Bootstrap and Material design-->
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/mdb.min.css">
        <!--Bootstrap and Material design-->
        <!--Datatables-->
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/addons/datatables.min.css">
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/addons/datatables-selected.css">
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/addons/datatables-select.min.css">
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/modules/animations-extended.min.css">
        <!--Datatables-->
        <!--step wizard-->
        <link rel="stylesheet" href="../../../src/assets/Bootstrap/dist/css/smart_wizard_theme_circles.min.css">
        <!--step wizard-->
        <link rel="stylesheet" href="../../../src/assets/css/layouts/_navbar.css">
        <link rel="stylesheet" href="../../../src/assets/css/layouts/_card_properties.css">
        <!--calendar-->
        <link rel="stylesheet" href="../../../src/fullcalendar/packages/core/main.min.css">
        <link rel="stylesheet" href="../../../src/fullcalendar/packages/daygrid/main.min.css">
        <link rel="stylesheet" href="../../../src/fullcalendar/packages/timegrid/main.min.css">
        <link rel="stylesheet" href="../../../src/fullcalendar/packages/list/main.min.css">
        <!--calendar-->
        <!--SCRIPTS-->
        <script src="../../../src/assets/js/vendors/fontawesome.js"></script>
        <script src="../../../src/assets/js/vendors/solid.js"></script>
        <!--SCRIPTS-->
        <title></title>
    </head>
    <body>
        <div class="wrapper">
                    <!---NAVIGATION BAR--->
            <div id="content">  
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark">
                    <a href="#" id="icons" class="navbar-brand">CLIFE</a>
                            
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="admin.php" class="nav-link"><i class="fas fa-home"></i> Dashboard
                                        <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-calendar-check"></i> Appointment</a>

                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarContent">
                                        <a href="scheduller.php" class="dropdown-item"><i class="fas fa-calendar-alt"></i> Schedule</a>
                                        <a href="appointments_history.php" class="dropdown-item"><i class="fas fa-file-medical"></i> Appointment History</a>
                            </div>
                            </li>
                            <li class="nav-item">
                                <a href="medicine.php" class="nav-link text-white" ><i class="fas fa-tablets"></i> Medicine</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="account.php" class="nav-link text-white">
                                <i class="fas fa-users"></i>
                                Accounts</a>
                            </li>
                            <li class="nav-items dropdown">
                                <a href="#" class="nav-link text-white" data-toggle="dropdown"><i
                                aria-haspopup="true" aria-expanded="false" 
                                class="fas fa-syringe"></i> Patients</a>


                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarContent">
                                        <a href="add_patient.php" class="dropdown-item"><i class="fas fa-cart-plus"></i> Add Patients</a>
                                        <a href="patient_table.php" class="dropdown-item"><i class="fas fa-clipboard"></i> Patients Records</a>
                            </div>
                            </li>
                            <li class="nav-items dropdown">
                                <a href="#" class="nav-link text-white" data-toggle="dropdown"><i
                                aria-haspopup="true" aria-expanded="false" 
                                class="fas fa-user-md"></i> Doctor</a>


                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarContent">
                                        <a href="add_doctor.php" class="dropdown-item"><i class="fas fa-cart-plus"></i> Add Doctor</a>
                            
                                        <!--<a href="#" class="dropdown-item"><i class="fas fa-clipboard"></i> Doctor lists</a>-->
                            </div>
                            </li>
                            <li class="nav-items">
                                <a href="#" class="nav-link text-white" id="databaseBackup" data-toggle="modal" data-target="#backModal"><i class="fas fa-database"></i> Backup</a>
                                <?php include_once 'backup.php'?>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icon">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="navbarContent" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" style="color:white;">
                                    <i class="fas fa-user"></i>    <strong>    Admin   </strong>,   
                                    <?php
                                    if (isset($_SESSION['UID']) == "Admin") 
                                    {
                                        echo $_SESSION['UID'];
                                    } 
                                    else
                                    {
                                        echo "<script>alert('Please Enter Your Credintial'); window.location='error.php';</script> ";
                                    }
                                    ?>          
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" 
                                aria-labelledby="navbarContent">    
                                            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
                                            <a class="dropdown-item" href="logout.php" id="logout" 
                                            data-id="<? echo $id->lastInsertId(); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--<ol id="breadcrumbs"></ol>-->
            <!---NAVIGATION BAR--->