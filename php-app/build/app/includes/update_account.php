<?php
    include_once '../controller/Usercontr.con.php';
    include_once '../auto/auto_load.auto.php';
    date_default_timezone_set("Asia/Singapore");
    
    if(isset($_POST['account']))
    {
        $fetch_data = new Usercontr();
        $account_data = $fetch_data->fetchUserAccount($_POST['account']);
        //var_dump($account_data[0]);
?>
            <div class="modal-content">
                <!--Modal Header-->

                <div class="modal-header warning-color">
                    <h5 class="modal-title text-white">Update User Account</h5>
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
                                    <input type="hidden" class="form-control" value="<?php echo $account_data[0]?>" name="account_id" id="account_id" readonly>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Email</span></h5>
                                    <input type="email" class="form-control" name="email" value="<?php echo $account_data[1]?>" id="account_email" placeholder="account_email">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Username</span></h5>
                                    <input type="text" class="form-control" name="username" value="<?php echo $account_data[2]?>"  id="account_username" placeholder="account_username">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">First name</span></h5>
                                    <input type="text" class="form-control" name="account_firstname" value="<?php echo $account_data[3]?>"  id="account_firstname" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Middle name</span></h5>
                                    <input type="text" class="form-control" name="account_middlename" value="<?php echo $account_data[4]?>"  id="account_middlename" placeholder="Middle name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Last name</span></h5>
                                    <input type="text" class="form-control" name="account_lastname" value="<?php echo $account_data[5]?>"  id="account_lastname" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Usertype</span></h5>
                                    <select name="account_usertype" id="account_usertype" class="form-control">
                                        <option disable selected><?php echo $account_data[6]?></option>
                                        <?if($account_data[6] == "Admin")
                                            echo '<option value="User">User</option>';
                                        else
                                            echo '<option value="Admin">Admin</option>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Date Updated</span></h5>
                                    <input type="text" class="form-control" name="account_date" value="<?php echo date("y-m-d H:i:s");?>" readonly id="account_date">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" id="closing" class="btn btn-secondary">Cancel</button>
                        <button type="submit" name="update_account" id="update_account" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Update</button>
                </div>
                </form>
            </div>
<?php }?>