<?php
    include_once '../controller/Doctorcontr.con.php';

    if(isset($_POST['doctor_id']))
    {
        $data = new Doctorcontr();
        $doctor_data = $data->fetchDoctorData($_POST['doctor_id']);
        //print_r($_POST['doctor_id']);

?>
    <div class="modal-content">
                <!--Modal Header-->
                <div class="modal-header warning-color">
                    <h5 class="modal-title text-white">Update Doctor Information</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <!--Modal Body-->
                <div class="modal-body">
                    <div class="container">
                        <i class="fas fa-stethoscope text-warning animated rotateIn mx-auto fa-5x" style="display:block;"></i>
                        <h4 class="text-center mt-4">Doctor</h4>
                        <div class="row">
                            <form action="../data/doctor.data.php" method="POST" id="doctorForm" role="form">
                            <div class="form-group">
                                    <input type="hidden" class="form-control" name="doc_id" value="<?php echo $doctor_data[0];?>" id="doc_id" required readonly>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">First Name</span></h5>
                                    <input type="text" class="form-control" name="doctor_firstname" value="<?php echo $doctor_data[1];?>" id="doctor_firstname" required placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Middle Name</span></h5>
                                    <input type="text" class="form-control" name="doctor_middlename" value="<?php echo $doctor_data[2];?>" id="doctor_middlename" required placeholder="Middle Name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Last name</span></h5>
                                    <input type="text" class="form-control" name="doctor_lastname" value="<?php echo $doctor_data[3];?>" id="doctor_lastname" required placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Abbreviation</span></h5>
                                    <input type="text" class="form-control" name="doctor_abbreviation" value="<?php echo $doctor_data[4];?>" id="doctor_abbreviation" required placeholder="Abbreviation">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Address</span></h5>
                                    <input type="text" class="form-control" name="doctor_address" value="<?php echo $doctor_data[5];?>" id="doctor_address" required placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Age</span></h5>
                                    <input type="number" class="form-control" name="doctor_age" value="<?php echo $doctor_data[6];?>" id="doctor_age" required placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Gender</span></h5>
                                    <select name="gender_doctor" id="gender_doctor" required class="form-control">
                                    <option disable selected><?php echo $doctor_data[7]?></option>
                                       <?php if($doctor_data[7] == "Male")
                                           echo "<option value='Female'>Female</option>";
                                       else
                                        echo "<option value='Male'>Male</option>";
                                       ?>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <button type="submit" name="btn_update_doc" id="btn_update_doc" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                </form>
    </div>
    <?php }?>