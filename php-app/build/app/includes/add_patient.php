<?php include_once 'header.php';?>
<div class="container">
    <div class="row">
        <form action="" class="animated fadeIn" id="myform" role="form" method="POST">
            <h3>Patients Record</h3>
            <nav arial-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                    <li class="breadcrumb-item" active aria-current="page">Add Patients</li>
                </ul>
            </nav>
            <div id="smartWizard">
                <ul>
                    <li><a href="#form-step-0" class="mx-5"><i class="fas fa-user fa-lg"></i></a></li>
                    <li><a href="#form-step-1" class="mx-5"><i class="fas fa-briefcase-medical fa-lg"></i></a></li>
                    <li><a href="#form-step-2" class="mx-5"><i class="fas fa-file-medical-alt fa-lg"></i></a></li>
                    <li><a href="#form-step-3" class="mx-5"><i class="fas fa-capsules fa-lg"></i></a></li>
                    <li><a href="#form-step-4" class="mx-5"><i class="fas fa-paper-plane fa-lg"></i></a></li>
                </ul>
              <div>
              <div id="form-step-0" role="form" data-toggle="validator">
                          <h3>Patients Information</h3>
                          <hr class="pb-5">
                          <div class="row mt-2">
                                  <div class="col-lg-4">
                                      <div class="form-group">
                                          <h4><span class="badge purple-gradient">First Name</span></h4>
                                          <input type="text" id="firstname" name="firstname" class="form-control" required="required" placeholder="First name">  
                                      </div>           
                                  </div>
                                  <div class="col-lg-4">
                                  <div class="form-group">
                                              <h4><span class="badge purple-gradient">Middle Name</span></h4>
                                              <input type="text" id="middlename" name="middlename" class="form-control" required placeholder="Middle name">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Last Name</span></h4>
                                              <input type="text" id="lastname" name="lastname" class="form-control" required placeholder="Last Name">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group"> 
                                              <h4><span class="badge purple-gradient">Address</span></h4>
                                              <input type="text" class="form-control" name="address" id="address" required placeholder="Address">
                                          </div>
                                        </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Contact Number</span></h4>
                                              <input type="text" class="form-control" name="contactnum" id="contactnum" required placeholder="Contact Number">
                                          </div>
                                      </div>
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">Gender</span></h4>
                                                  <select parsley-triggered="keyup" class="form-control" name="gender" required id="gender">
                                                      <option value="" class="form-control" disable select></option>
                                                      <option value="" class="form-control">Male</option>
                                                      <option value="" class="form-control">Female</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">Birthday</span></h4>
                                                  <input type="date" class="form-control" names="bday" id="bday" required placeholder="Birthday">
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">Age</span></h4>
                                                  <input type="text" class="form-control" names="age" id="age" required placeholder="Birthday">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              <!--</div>-->

                            <div id="form-step-1" role="form" data-toggle="validator">
                                  <h3>Medical History</h3>  
                                  <hr class="mb-5">
                                  <div class="row mt-2">
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">Describe your problem</span></h4>
                                                  <textarea type="text" id="main_problem" name="main_problem" class="form-control" rows="5" placeholder="Describe your main problem"></textarea>
                                              </div>
                                      </div>
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">How severe the problem is ?</span></h4>
                                                  <textarea type="text" id="sever_problem" name="sever_problem" class="form-control" rows="5" placeholder="How severe is your problem"></textarea>
                                              </div>
                                      </div>
                              </div>
                              <div class="row mt-3">
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">How long do you have this problem?</span></h4>
                                                  <textarea type="text" id="problem_long" name="problem_long" class="form-control" rows="5" placeholder="How long have you had this problem?"></textarea>
                                              </div>
                                      </div>
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">When is the exact date of the problem occur</span></h4>
                                                  <input type="date" id="problem_date" name="problem_date" class="form-control">
                                              </div>
                                      </div>
                              </div>
                              <div class="row mt-3">
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">Where are you when this problem started?</span></h4>
                                                  <input type="date" id="problem_started" name="problem_started" class="form-control" rows="5" placeholder="Where are you?">
                                              </div>
                                      </div>
                                      <div class="col-lg-6">
                                              <div class="form-group">
                                                  <h4><span class="badge purple-gradient">What are the symptoms occur?</span></h4>
                                                  <textarea type="text" id="problem_occur" name="problem_occur" class="form-control" rows="5" placeholder="What other symptoms happen with this problem?"></textarea>
                                              </div>
                                      </div>
                              </div>
                              <h4 class="font-weight-light mt-5">List Previous hospitalization, Surgeries, Serious Injuries</h4>
                              <hr class="mb-5">
                              <div class="form-group">
                                      <table class="table table-responsive table-bordered" id="table-list">
                                              <tr id="row">
                                                  <td class="col-lg-12"><h4><span class="badge badge-danger">hospitalization</span></h4> <input type="text" class="form-control" name="name[]" placeholder="List of hospitalization"> </td>
                                                  <td><h4><span class="badge badge-danger">When</span></h4><input type="date" class="form-control" name="dateOccurs" id="dateOccurs"></td>
                                                  <td><button type="button" class="btn purple-gradient" name="addList" id="addList"><i class="fas fa-plus fa-lg text-white"></i> </button></td>
                                              </tr>
                                      </table>
                              </div>                    
                          </div>

                            <div id="form-step-2">
                              <h3>Parents Medical History</h3>
                                      <hr class="mb-5">
                              <div class="row ">
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <table class="table table-responsive table-borderless" id="table-history-list">
                                              <tr id="familyMedicalHistory_row">
                                              <thead>
                                                  <tr>
                                                      <th><h4><span class="badge purple-gradient">Full Name</span></h4></th>
                                                      <th><h4><span class="badge purple-gradient">Age</span></h4></th>
                                                      <th><h4><span class="badge purple-gradient">Disease</span></h4></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td><input type="text" id="fatherName" name="fatherName" class="form-control" placeholder="Father name"></td>
                                                      <td><input type="text" id="age" name="age" class="form-control" placeholder="Father Age"></td>
                                                      <td><input type="text" id="disease" name="disease" class="form-control" placeholder="Fater Diseases"></td>
                                                  </tr>
                                                  <tr>
                                                      <td><input type="text" id="motherName" name="motherName" class="form-control" placeholder="Mother Name"></td>
                                                      <td><input type="text" id="age" name="age" class="form-control" placeholder="Mother Age"></td>
                                                      <td><input type="text" id="disease" name="disease" class="form-control" placeholder="Mother Disease"></td>
                                                  </tr>
                                              </tbody>      
                                          </table>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <table class="table table-responsive table-bordered mt-4" id="child-list">
                                                  <tr>
                                                          <th><h4><span class="badge badge-danger">Children Name</span></h4></th>
                                                          <th><h4><span class="badge badge-danger">Age</span></h4></th>
                                                          <th><h4><span class="badge badge-danger">Disease</span></h4></th>
                                                  </tr>
                                                  <tbody>
                                                      <tr id="child-row">
                                                          <td><input type="text" id="childern" name="childern" class="form-control" placeholder="children"></td>
                                                          <td><input type="text" id="age" name="age" class="form-control" placeholder="children Age"></td>
                                                          <td><input type="text" id="disease" name="disease" class="form-control" placeholder="children Disease"></td>
                                                          <td><button type="button" id="child-btn" name="child-btn" class="btn purple-gradient"><i class="fas fa-plus fa-lg text-white"></i></button></td>
                                                      </tr>
                                                  </tbody>
                                              </table>    
                                      </div>
                                  </div>
                              </div>
                              <h3 class="mt-5">Patient Social History</h3>
                              <hr class="mb-5">
                              <div class="row">
                                      <table class="table table-responsive table-borderless" style="margin:auto; width:80% !important;" id="patientSocialHistory">
                                          <tr>
                                              <td><h4 class="text-right"><span class="badge purple-gradient">Parents Marital Status : </span></h4></td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-status ml-5" id="maritalStatus">
                                                      <label for="maritalStatus" class="custom-control-label">Single</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-status ml-5" id="married">
                                                      <label for="married" class="custom-control-label">Married</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-status ml-5" id="separated">
                                                      <label for="separated" class="custom-control-label">Separated</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-status ml-5" id="divorced">
                                                      <label for="divorced" class="custom-control-label">Divorced</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-status ml-5" id="widowed">
                                                      <label for="widowed" class="custom-control-label">Widowed</label>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td><h4 class="text-right"><span class="badge purple-gradient">Use Of Alcohol :</span></h4></td>
                                                  <td>
                                                      <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input check-alcohol" id="never1">
                                                          <label for="never1" class="custom-control-label">Never</label> 
                                                      </div>
                                                  </td>    
                                                  <td>
                                                      <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input check-alcohol" id="rarely">
                                                          <label for="rarely" class="custom-control-label">Rarely</label> 
                                                      </div>
                                                  </td>  
                                                  <td>
                                                      <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input check-alcohol" id="moderate">
                                                          <label for="moderate" class="custom-control-label">Moerate</label> 
                                                      </div>
                                                  </td>  
                                                  <td>
                                                      <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input check-alcohol" id="daily">
                                                          <label for="daily" class="custom-control-label">Daily</label> 
                                                      </div>
                                                  </td>    
                                                  <td></td>
                                          </tr>
                                          <tr>
                                              <td><h4 class="text-right"><span class="badge purple-gradient">Use of tobacco :</span></h4></td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-tobacco" value="never2" id="never2">
                                                      <label for="never2" class="custom-control-label">Never</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-tobacco" value="previous" id="previous">
                                                      <label for="previous" class="custom-control-label">Previously/quit</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-tobacco" value="packs" id="packs">
                                                      <label for="packs" class="custom-control-label">Current packs</label>
                                                  </div>
                                              </td>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                          <tr id="tobacco-toggle"></tr>
                                          <tr>
                                              <td><h4 class="text-right"><span class="badge purple-gradient">Use of Drugs :</span></h4></td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-drugs" id="never3">
                                                      <label for="never3" class="custom-control-label check">Never</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-drugs"  id="type-of-frequency">
                                                      <label for="type-of-frequency" class="custom-control-label">Type/Frequency</label>
                                                  </div>
                                              </td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>   
                                          <tr id="drugs"></tr>
                                          <tr>
                                              <td><h4 class="text-right"><span class="badge purple-gradient">Excessive work :</span></h4></td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-work" id="fumes">
                                                      <label for="fumes" class="custom-control-label">Fumes</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-work" id="dust">
                                                      <label for="dust" class="custom-control-label">Dust</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-work" id="solvents">
                                                      <label for="solvents" class="custom-control-label">Solvents</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-work" id="noise">
                                                      <label for="noise" class="custom-control-label">Noise</label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input check-work" id="chemicals">
                                                      <label for="chemicals" class="custom-control-label">Chemicals</label>
                                                  </div>
                                              </td>
                                          </tr>
                                      </table>
                            
                                </div>
                          </div>
                          <!--Diseases-->
                          <div id="form-step-3">
                                  <h3>Have you ever had the following?</h3>
                                  <hr class="mt-5">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Diabetes</span></h4>
                                              <select name="diseases" id="diseases" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Hypertension</span></h4>
                                              <select name="hypertension" id="hypertension" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div><div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Cancer</span></h4>
                                              <select name="cancer" id="cancer" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Stroke</span></h4>
                                              <select name="stroke" id="stroke" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Heart Trouble</span></h4>
                                              <select name="heart-trouble" id="heart-trouble" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Arthritis</span></h4>
                                              <select name="arthritis" id="arthritis" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Convulsion</span></h4>
                                              <select name="convulsion" id="convulsion" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Beading Tendency</span></h4>
                                              <select name="bleading-tendency" id="bleading-tendency" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Vinereal Disease</span></h4>
                                              <select name="vinereal-disease" id="vinereal-disease" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <h4><span class="badge purple-gradient">Hereditary Defects</span></h4>
                                              <select name="hereditary-defects" id="hereditary-defects" class="form-control">
                                                  <option value="" disable select></option>
                                                  <option value="Yes" >Yes</option>
                                                  <option value="No" >No</option>
                                              </select>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                                  <h3 class="mt-5">List Medications you are currently taking.</h3>
                                  <hr class="mt-5">
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                          <table class="table table-responsive table-bordered" style="margin: auto; width: 80% !important" id="list_medications">
                                              <tr id="medications">
                                                  <td><h4><span class="badge badge-danger">Medication</span></h4></td>
                                                  <td class="col-lg-12"><input type="text" class="form-control" name="medications" name="list-medications" placeholder="List of Medications"></td>
                                                  <td><button type="button" id="add-medication" class="btn btn-primary"><i class="fas fa-plus fa-lg text-white"></i></button></td>
                                              </tr>
                                          </table>
                                          </div> 
                                      </div>
                                  </div>
                          </div>
                          <!--Diseases-->
                          <div id="form-step-4">
                              <div class="card wider mx-auto" style="width: 20rem;">
                                  <img src="../../Images/background/undraw_medicine_b1ol.svg" class="card-img-top" alt="">
                                  <div class="card-body">
                                      <p>Click save button to save data to the database. Thank you</p>
                                      <button type="submit" name="btn_submit" id="btn_submit" style="display:none;" class="btn btn-danger animated bounce float-right">Save</button>
                                  </div>
                                </div>
                         </div>  
               </div>   
            </div>                              
        </form>
    </div>
</div>
<?php include_once 'footer.php';?>