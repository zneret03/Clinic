<?php 
include_once '../view/Doctorview.view.php';
$doctor = new Doctorview();
$doct = $doctor->fetchRandomDoctor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../src/fullcalendar/packages/core/main.min.css">
    <link rel="stylesheet" href="../../../src/fullcalendar/packages/daygrid/main.min.css">
    <link rel="stylesheet" href="../../../src/fullcalendar/packages/timegrid/main.min.css">
    <link rel="stylesheet" href="../../../src/fullcalendar/packages/list/main.min.css">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/mdb.min.css">
    <script src="../../../src/assets/js/vendors/fontawesome.js"></script>
    <script src="../../../src/assets/js/vendors/solid.js"></script>
    <link rel="stylesheet" href="../../../src/assets/css/main.css">
    <title>Document</title>
</head>
<body>
    <? include_once 'header.php' ?>
<div class="margin">
<h3>Appointments</h3>
<hr>
<br class="mt-5">
<div class="row">
    <div class="col-lg-6">
        <div id="calendar"></div>
        <hr class="mt-5">
        <div id="list" class="mb-3"></div>
    </div>
<br class="mt-5">
<div class="col-lg-6">
<form action="appointments.php" method="POST" role="form" id="appointmentsForm">
    <div class="card" id="patientsAppointments" style="display:none;">
        <div class="card-header danger-color">
            <h4 class="text-white">Appointments</h4>
        </div>
        <div class="card-body">
            <div class="row">
                    <input type="hidden" class="form-control" name="doctorid" id="doctorid"  value="<?echo $doct[0];?>">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h4><span class="badge danger-color">First Name</span></h4>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
                        </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h4><span class="badge danger-color">Middle Name</span></h4>
                            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle name">
                    </div>   
                    </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <h4><span class="badge danger-color">Last Name</span></h4>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                        </div>   
                    </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <h4><span class="badge danger-color">Phone Number</span></h4>
                            <input type="number" name="phoneNum" id="phoneNum"  class="form-control" placeholder="Phone number">
                        </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h4><span class="badge danger-color">Email</span></h4>
                            <input type="email" name="user_email" id="user_email" class="form-control" placeholder="email">
                    </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">problems?</span></h4>    
                            <select name="problems" id="problems" class="form-control">
                            <option selected disabled></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </div>   
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">    
                        <div id="diseases" style="display:none;">
                            <h4><span class="badge badge-danger">Diseases</span></h4>    
                            <select name="diseasesProblem" id="diseasesProblem" class="form-control">
                            <option selected disabled></option>
                            <option value="150">Tetanus</option>
                            <option value="200">Eye Examination</option>
                            </select>
                        </div>
                    </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">    
                            <div id="doctor" style="display:none;">
                                <h4><span class="badge badge-danger">Doctor</span></h4>    
                                <input type="text" class="form-control" name="doctorName" value="<? echo $doct[1] . " " . $doct[2] . " " . $doct[3]; ?>" id="doctorName" readonly>
                            </div>
                        </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">    
                            <div id="appointmentsDate" style="display:none;">
                                <h4><span class="badge badge-danger">Date</span></h4>    
                                <input type="text" class="form-control" name="appointments" id="appointments" readonly>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <br class="mt-5">
        <div class="card">
            <div class="card-header danger-color">
                <h4 class="text-white">Customer's Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Problem Description</span></h4>
                            <textarea class="form-control" name="description" id="description" col="30" rows="8" placeholder="Desctiptions"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Address</span></h4>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Age</span></h4>
                            <input type="number" class="form-control" name="age" id="age" placeholder="age">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Gender</span></h4>
                            <select name="gender" id="gender" class="form-control" >
                                <option selected disabled></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer" id="Userpayments" style="display:none;">
            <div class="col-md-12">
                    <div class="form-group">
                        <h6>Appointments Fee</h6>
                        <span class="form-control" id="appointments_fee"></span>
                    </div>
                    <div class="form-group">
                        <h6>Check up fee</h6>
                        <span class="form-control" id="check_up_fee"></span>
                    </div>
                    <div class="form-group">
                        <h6>Total</h6>
                        <span class="form-control" id="total"></span>
                    </div>
            </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="button"  name="cancel" id="cancel" value="Cancel" class="btn btn-secondary">Cancel</buttpn>
                    <button type="button" name="calculate" id="calculate" class="btn btn-primary">Calculate</button>
                    <button type="submit" name="submitAppointment" id="submitAppointment" style="display:none;" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
        </form>
     </div>
</div>
    </div>
</div>
</div>
    <? include_once 'footer.php'?>
    <!--Jquery-->
    <script src="../../../src/assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
    <!--Jquery-->
    <!--Boostrap-->
    <script src="../../../src/assets/Bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../src/assets/Bootstrap/js/mdb.min.js"></script>
    <!--Boostrap-->
    <!--Calendar-->
    <script src="../../../src/fullcalendar/packages/core/main.min.js"></script>
    <script src="../../../src/fullcalendar/packages/interaction/main.min.js"></script>
    <script src="../../../src/fullcalendar/packages/daygrid/main.min.js"></script>
    <script src="../../../src/fullcalendar/packages/timegrid/main.min.js"></script>
    <script src="../../../src/fullcalendar/packages/list/main.min.js"></script>
    <script src="../../../src/fullcalendar/packages/rrule/main.min.js"></script>
    <script src="../../../src/fullcalendar/vendor/moment.js"></script>
    <!--calendar-->
    <!--javascript appointments functions-->
    <script src="../../../src/assets/js/functions/appointments.js"></script>
    <!--javascript appointments functions-->
    <!--validation-->
    <script src="../../../src/assets/js/vendors/validate.js"></script>
    <!--validation-->
</body>
</html>