<?php include_once 'header.php';
include_once '../controller/Medicinecontr.con.php';
?>
<div class="container">

    <div id="updateMedicine" class="modal fade left"  tabindex="-1" aria-labell="updateMedicine">
        <div class="modal-dialog modal-full-height modal-left" role="document">
            <div id="content-data"></div>
        </div>
    </div>

    <h2>Medicine Information</h3>
    <nav aria-labell="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medicine</li>
        </ol>
    </nav>
    <hr class="mt-5">
    <?php
        if(isset($_POST['btn_save_med']))
        {
            $id = rand();
            $year = date('Y');
            $medicine_code = $id . $year;
            $medicine = array(
                $medicine_code,
                $_POST['name'],
                $_POST['brand'],
                $_POST['unit'],
                $_POST['quantity'],
                $_POST['other_name'],
                $_POST['description']
            );

            $med = new Medicinecontr();
            $med->setMedicine($medicine);
        }
    ?>
    <div class="text-right">
        <button type="button" id="medicine_modal" class="btn btn-success animated bounceInDown" data-toggle="modal" data-target="#medicineModal">
        <i class="fas fa-pills fa-lg"></i> New Medicine</button>
    </div>
    <div id="medicineModal" class="modal fade left" role="modal" aria-hidden="true" tabindex="-1" aria-labell="medicineModal">
        <div class="modal-dialog modal-full-height modal-left" aria-hidden="true" role="document">
            <div class="modal-content">
                <!--Modal Header-->
                <div class="modal-header secondary-color">
                    <h5 class="modal-title text-white">Medicine Information</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" role="modal" aria-labell="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Modal Header-->

                <!--Modal Body-->
                <div class="modal-body">
                    <div class="container">
                        <i class="fas fa-pills fa-4x mx-auto animated rotateIn text-secondary" style="display:block;"></i>
                            <h4 class="text-center mt-4">Medicine</h4>
                            <div class="row">
                                <form action="medicine.php" method="POST" id="medForm" role="form">
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Medicine Name</span></h5>
                                        <input type="text" class="form-control" name="name" required  id="name" placeholder="Medicine Name">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Medicine Brand</span></h5>
                                        <input type="text" class="form-control" name="brand" required  id="brand" placeholder="Medicine Brand">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Unit</span></h5>
                                        <input type="number" class="form-control"  name="unit" required  id="unit" placeholder="Medicine Unit">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Quanity</span></h5>
                                        <input type="number" class="form-control" name="quantity" required   id="quantity" placeholder="Medicine Unit">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Other Name</span></h5>
                                        <input type="text" class="form-control" name="other_name" required  id="other_name" placeholder="Medicine Other Name">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Description</span></h5>
                                        <textarea type="text" class="form-control" name="description" required  id="description" placeholder="Medicine Name"></textarea>
                                    </div>
                            </div>
                    </div>
                </div>
                <!--Modal Body-->

                <!--Modal Footer-->
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" id="damn" class="btn btn-secondary">Cancel</button>
                    <button type="submit" name="btn_save_med" value="Validate!" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                <!--Modal Footer-->
                </form>
            </div>
        </div>
    </div>
    
    <div class="row">
        <table class="table table-responsive table-striped text-center" id="medicineTable">
            <thead>
                <tr>
                    <th>Medicine Code</th>
                    <th>Medicine Name</th>
                    <th>Medicine Brand</th>
                    <th>Unit Price</th>
                    <th>quantity</th>
                    <th>Other Name</th>
                    <th>Description</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php include_once 'footer.php';?>