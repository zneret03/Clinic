<?
    include_once '../controller/Doctorcontr.con.php';
    if(isset($_POST['appointments_id']))
    {
        $doctor = new Doctorcontr();
        $appData = $doctor->setAppointmentsCredentials($_POST['appointments_id']);
?>
<div class="modal-content">
    <!-- Modal Header-->
    <div class="modal-header warning-color">
        <h5 class="text-white">Update Appointments Credentials</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- Modal Header-->
    <!--Modal Body-->
    <div class="modal-body">
        <form action="../data/appointments.data.php" id="appointmentsFormUpdates">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="app_code_id" id="app_code_id" value="<?echo $appData[0];?>">
                            <h4><span class="badge badge-danger">Firstname</span></h4>
                            <input type="text" class="form-control" value="<?echo $appData[1];?>" required name="fname" id="fname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Middlename</span></h4>
                            <input type="text" class="form-control" value="<?echo $appData[2];?>" required  name="mname" id="mname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Lastname</span></h4>
                            <input type="text" class="form-control" value="<?echo $appData[3];?>" required  name="lname" id="lname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Address</span></h4>
                            <input type="text" class="form-control" value="<?echo $appData[4];?>" required  name="address" id="address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Phone Number</span></h4>
                            <input type="text" class="form-control" value="<?echo $appData[5];?>" required name="phoneNum" id="phoneNum">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4><span class="badge badge-danger">Email</span></h4>
                            <input type="email" class="form-control" value="<?echo $appData[6];?>" required name="appEmail" id="appEmail">
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <h4><span class="badge badge-danger">Description</span></h4>
                        <textarea class="form-control" name="Appnotes" id="Appnotes" cols="10" required rows="5"><?echo $appData[7]?></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--Modal Body-->
    
    <!--Modal Footer-->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="updateAppointments" id="updateAppointments">Update</button>
        </div>
    <!--Modal Footer-->
</div>
    <?}?>