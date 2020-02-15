<?php include_once 'header.php'; 
      date_default_timezone_set("Asia/Singapore");
      include_once '../controller/Usercontr.con.php';    
?>
<div class="container">
    <h2>Accounts Information</h2>
        <nav arial-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ul>
        </nav>
    <hr class="mt-2">
    <?php
        //Save data to the database
        if(isset($_POST['btn_submit_account']))
        { 
            $Identification = rand();
            $date = date('Y');
            $userId = $Identification . $date;
            $variable_sources = array(
                $userId,
                $_POST['email'],
                $_POST['username'],
                $_POST['firstname'],
                $_POST['middlename'],
                $_POST['lastname'],
                $_POST['password'],
                $_POST['usertype'],
                $_POST['date']
                );

                $createUser = new Usercontr();
                $createUser->setUser($variable_sources);
        }
    ?>
    <div class="text-right">
         <button type="button" id="new_user" data-toggle="modal" data-target="#userModal" class="btn btn-warning animated bounceInDown"><i class="fas fa-users fa-lg"></i> New User</button>
    </div>
    <div id="userModal" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="userModal">
        <div class="modal-dialog modal-full-height modal-left" role="document">
            <div class="modal-content">
                <!--Modal Header-->

                <div class="modal-header warning-color">
                    <h5 class="modal-title text-white">User Account information</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <!--Modal Body-->

                <div class="modal-body">
                    <div class="container">
                        <i class="fas fa-user-astronaut text-warning animated rotateIn mx-auto fa-5x" style="display:block;"></i>
                        <h4 class="text-center mt-4">User Account</h4>
                        <div class="row">
                            <form action="account.php" method="POST" id="userForm" role="form">
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Email</span></h5>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Username</span></h5>
                                    <input type="text" class="form-control" name="username"  id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">First name</span></h5>
                                    <input type="text" class="form-control" name="firstname"  id="firstname" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Middle name</span></h5>
                                    <input type="text" class="form-control" name="middlename"  id="middlename" placeholder="Middle name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Last name</span></h5>
                                    <input type="text" class="form-control" name="lastname"  id="lasname" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Password</span></h5>
                                    <input type="password" class="form-control" name="password"  id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Confirm Password</span></h5>
                                    <input type="password" class="form-control" name="confirm_password"  id="confirm_password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Usertype</span></h5>
                                    <select name="usertype" id="usertype" class="form-control">
                                        <option value="" disable select></option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Date Created</span></h5>
                                    <input type="text" class="form-control" value="<?php echo date("y-m-d h:i:s");?>" name="date" id="date" readonly>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" id="closing" class="btn btn-secondary">Cancel</button>
                        <button type="submit" name="btn_submit_account" id="btn_submit_account" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>  
    
    <div id="UpdateuserModal" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="userModal">
        <div class="modal-dialog modal-full-height modal-left" role="document">
            <div id="content-data"></div>
        </div>
    </div>

    <div class="row">
        <table class="table table-responsive animated fadeIn table-striped text-center mx-auto" id="user-table" role="user-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Usertype</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php include_once 'footer.php'?>