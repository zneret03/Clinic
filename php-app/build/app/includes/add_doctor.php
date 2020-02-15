<?php include_once 'header.php'?>
<div class="container">
    <h2>Doctors Information</h2>
        <nav arial-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                <li class="breadcrumb-item">Doctor</li>
                <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
            </ul>
        </nav>
    <hr class="mt-2">
    <div class="text-right">
         <button type="button" id="doctor_informaton" data-toggle="modal" data-target="#doctModal" class="btn btn-primary animated bounceInDown"><i class="fas fa-plus fa-lg"></i> New Doctor</button>
    </div>
    <div id="doctModal" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="doctModal">
        <div class="modal-dialog modal-full-height modal-left" role="document">
            <div class="modal-content">
                <!--Modal Header-->
                <div class="modal-header warning-color">
                    <h5 class="modal-title text-white">Doctor Information</h5>
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
                                    <h5><span class="badge badge-danger">First Name</span></h5>
                                    <input type="text" class="form-control" name="doc_firstname" id="doc_firstname" required placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Middle Name</span></h5>
                                    <input type="text" class="form-control" name="doc_middlename" id="doc_middlename" required placeholder="Middle Name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Last name</span></h5>
                                    <input type="text" class="form-control" name="doc_lastname" id="doc_lastname" required placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Abbreviation</span></h5>
                                    <input type="text" class="form-control" name="doc_abbreviation" id="doc_abbreviation" required placeholder="Abbreviation">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Address</span></h5>
                                    <input type="text" class="form-control" name="doc_address" id="doc_address" required placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Age</span></h5>
                                    <input type="number" class="form-control" name="doc_age" id="doc_age" required placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Gender</span></h5>
                                    <select name="doc_gender" id="doc_gender" required class="form-control">
                                        <option value="" disable select></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <button type="submit" name="btn_save_doc" id="btn_save_doc" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>  

    <div id="UpdatedoctModal" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="doctModal">
        <div class="modal-dialog modal-full-height modal-left" role="document">
        <div id="content-data"></div>
        </div>
    </div>
    <div class="row">
        <table class="table table-responsive animated fadeIn table-striped text-center mx-auto" id="doctorsTable" role="user-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Abbreviation</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<?php include_once 'footer.php'?>