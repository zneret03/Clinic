    <?php include_once 'header.php';
    include_once '../auto/auto_load.auto.php';
    $time_fetch = new Userview();
    $time = $time_fetch->getTime();
    ?>
        <div class="container">
            <div class="text-right">
                <div class="form-group">
                    <h5><span class="badge badge-primary">Time</span></h5>
                    <h2><span class="badge badge-danger" id="clock"></span></h2>
                </div>
            </div>
            <?php
                $welcome = new Userview();
                $welcome->userWelcome($_SESSION['UID']);
            ?>
            <div class="row"> 
                <div class="col-sm-4 pb-4">
                    <div class="card animated bounceInLeft">
                        <div class="card-body aqua-gradient">
                                <img src="../../Images/icons/ion-calendar-sharp.svg" width="23%" height="30%" alt="">
                                <h4 class="text-white float-right card-header-title">Appointments</h4>
                        </div>
                        <div class="card-footer">
                            <h3 class="float-right text-default">
                                <?php 
                                    $getAppointments = new Doctorview();
                                    echo $getAppointments->getAppointmentsData();
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-4">
                <a href="patient_table.php">
                    <div class="card animated bounceInLeft">
                        <div class="card-body sunny-morning-gradient">
                            <img src="../../Images/icons/medical-icon_i-inpatient.svg"  width="25%" height="30%" alt="">
                            <h4 class="text-white float-right card-header-title">Patients</h4>
                        </div>
                        <div class="card-footer">
                            <h3 class="float-right text-default">50</h3>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-sm-4 pb-4">
                <a href="medicine.php">
                    <div class="card animated bounceInLeft">
                        <div class="card-body amy-crisp-gradient">
                            <img src="../../Images/icons/ant-design_medicine-box-outline.svg"  width="25%" height="30%" alt="">
                            <h4 class="text-white float-right card-header-title">Medicines</h4>
                        </div>
                        <div class="card-footer">
                            <h3 class="float-right text-default">
                            <?php 
                                $count = new Medicineview();
                                $count->countMedicine();
                            ?>
                            </h3>
                        </div>
                    </div>
                </a>   
                </div>
                <div class="col-lg-4">
                    <a href="#" data-target="#onlineUsers" data-toggle="modal">
                    <div class="card animated bounceInLeft">
                        <div class="card-body warm-flame-gradient">
                        <i class="fas fa-users fa-4x text-white"></i>
                        <h4 class="text-white float-right card-header-title">Online users</h4>
                        </div>
                        <div class="card-footer">
                        <h3 class="float-right text-default">
                            <?php
                                $count = $time_fetch->getUserOnline();
                                echo count($count);
                            ?>
                        </h3>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                <a href="add_doctor.php">
                    <div class="card animated bounceInLeft">
                        <div class="card-body near-moon-gradient">
                        <i class="fas fa-stethoscope fa-4x text-white"></i>
                        <h4 class="text-white float-right card-header-title">Doctor</h4>
                        </div>
                        <div class="card-footer">
                        <h3 class="float-right text-default">
                            <?php
                                $doctor = new Doctorview();
                                $doctor->doctorNum();
                            ?>
                        </h3>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-4">
                <a href="account.php">
                    <div class="card animated bounceInLeft">
                        <div class="card-body tempting-azure-gradient">
                        <i class="fas fa-user-circle fa-4x text-white"></i>
                        <h4 class="text-white float-right card-header-title">Accounts</h4>
                        </div>
                        <div class="card-footer">
                        <h3 class="float-right text-default">
                            <?php 
                                $countUser = new Userview();
                                $countUser->getAccounts();
                            ?>
                        </h3>
                        </div>
                    </div>
                </a>
                </div>
            </div>

            <div id="onlineUsers" tabindex="-1" class="modal fade" aria-hidde="true" role="dialog" aria-labell="onlineUsers">
                <div class="modal-dialog modal-lg" role="documents">
                    <div class="modal-content">
                        <!--Modal Header-->
                        <div class="modal-header danger-color">
                        <h4 class="modal-title text-white">Online Users</h4>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Modal Header-->

                        <!--Modal Body-->
                        <div class="modal-body">
                            <h4>User Online Credentials</h4>
                            <hr>
                            <br class="mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-responsive table-striped table-center text-center" id="onlineUserTable">
                                        <thead>
                                        <tr>
                                            <th>user code</th>
                                            <th>Email</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>last Name</th>
                                            <th>Username</th>
                                            <th>Usertype</th>
                                            <th>status</th>
                                        </tr>
                                        </thead>
                                        <?
                                        foreach($time as $onlineUsers)
                                        {
                                            if($onlineUsers['statusColor'] == "#42B72A")
                                            {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?echo $onlineUsers['check_id'];?></td>
                                                <td><?echo $onlineUsers['user_email'];?></td>
                                                <td><?echo $onlineUsers['fname'];?></td>
                                                <td><?echo $onlineUsers['mname'];?></td>
                                                <td><?echo $onlineUsers['lname'];?></td>
                                                <td><?echo $onlineUsers['username'];?></td>
                                                <td><?echo $onlineUsers['usertype'];?></td>
                                                <td><i class="fas fa-circle" style="color:<?echo $onlineUsers['statusColor'];?>;"></i></td>
                                            </tr>
                                        </tbody>
                                        <?}
                                        }?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--Modal Body-->
                    </div>
                </div>
            </div>
            <!--Summary of Data stored in Appointments, Patients and Medicines-->

            <!--Monitoring Patients-->
            <canvas id="patientChart" class="my-5 py-5"></canvas> 
        <!--Monitoring Patients-->

            <!--Settings Task and Appointments-->
            <div class="row">
                <div class="col-sm-6 pb-4">
                    <div class="card animated fadeIn">
                        <div class="card-header secondary-color">
                            <h4 class="text-white card-header-title pl-2 my-1">Schedules</h4>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content mt-3">
                                <div id="calendar_list"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Settings Task and Appointments-->

                <!--Monitoring Login and Logout of a User-->
                <div class="col-sm-6">
                        <div class="card animated fadeIn">
                            <div class="purple rounded-top">
                                <h4 class="card-header-title text-white pl-4 my-3">Employee Login Time</h4>
                            </div>
                            <div class="card-body">
                                        <table class="table table-responsive text-center table-striped" id="userLogin">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th>Login</th>
                                                    <th>Logout</th>
                                                    <th>status</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                foreach($time as $val)
                                                {
                                                ?>
                                                <tbody>
                                                <tr id="timeData<?php echo $val['check_id']?>">
                                                    <td><?php echo $val['check_id']?></td>
                                                    <td><?php echo $val['user_email']?></td>
                                                    <td><?php echo $val['login_time']?></td>
                                                    <td><?php echo $val['logout_time']?></td>
                                                    <td><i class="fas fa-circle mt-3" style="color:<?php echo $val['statusColor'];?>;"></i></td>
                                                    <td><button type="submit" onclick="deleteData(<?php echo $val['check_id'];?>);" class="btn btn-link delete_button" id="delete_time"><i class='fas fa-trash text-danger'></i></button></td>
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                            </div>
                        </div>
                </div>
                <!--Monitoring Login and Logout of a User-->
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'?>
    
