<?php
    include_once '../controller/Medicinecontr.con.php';
    include_once '../auto/auto_load.auto.php';
    
    
    if(isset($_POST['id']))
    {
        $medicine = new Medicinecontr();
        $medicine_data = $medicine->get_Data_Medicine($_POST['id']);
?>
            <div class="modal-content">
                <!--Modal Header-->
                <div class="modal-header secondary-color">
                    <h5 class="modal-title text-white">Update Medicine</h5>
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
                                <form action="../data/medicine.data.php" method="POST" id="medForm" role="form">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="medicine_code"  id="medicine_code" value="<?php echo $medicine_data[0]?>" placeholder="Medicine code" readonly>
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Medicine Name</span></h5>
                                        <input type="text" class="form-control" name="medicine_name"  id="medicine_name" value="<?php echo $medicine_data[1]?>" placeholder="Medicine Name">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Medicine Brand</span></h5>
                                        <input type="text" class="form-control" name="medicine_brand"  id="medicine_brand" value="<?php echo $medicine_data[2]?>"  placeholder="Medicine Brand">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Unit</span></h5>
                                        <input type="number" class="form-control"  name="medicine_unit"  id="medicine_unit" value="<?php echo $medicine_data[3]?>" placeholder="Medicine Unit">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Quanity</span></h5>
                                        <input type="number" class="form-control" name="medicine_quantity"  id="medicine_quantity" value="<?php echo $medicine_data[4]?>" placeholder="quantity">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Other Name</span></h5>
                                        <input type="text" class="form-control" name="medicine_other_name"   id="medicine_other_name" value="<?php echo $medicine_data[5]?>" placeholder="Medicine Other Name">
                                    </div>
                                    <div class="form-group">
                                        <h5><span class="badge badge-danger">Description</span></h5>
                                        <textarea type="text" class="form-control" name="medicine_description"  id="medicine_description" placeholder="Description"><?php echo $medicine_data[6]?></textarea>
                                    </div>
                            </div>
                    </div>
                </div>
                                <!--Modal Body-->
               
                                <!--Modal Footer-->
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" id="damn" name="damn" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" name="button_update" id="button_update" class="btn btn-primary">
                                        <i class="fas fa-pencil-alt fa-lg"></i> Update</button>
                                    </div>
                                <!--Modal Footer-->
                                </form>
            </div>
<?php }?>