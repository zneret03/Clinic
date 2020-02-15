
    <?php include_once 'header.php'?>
    
    <div id="calendarModal" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="calendarModal">
        <div class="modal-dialog modal-side modal-top-left" role="document">
            <div class="modal-content">
                <!--Modal Header-->

                <div class="modal-header danger-color">
                    <h5 class="modal-title text-white"><i class="fas fa-calendar-alt"></i> Calendar Schedule</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <!--Modal Body-->

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="../data/calendar.data.php" method="POST" id="calendarForm" role="form">
                               <div class="form-group">
                                    <h5><span class="badge badge-danger">Title</span></h5>
                                    <input type="text" class="form-control" name="title" id="title" required placeholder="title">
                               </div>
                               <div class="form-group">
                                    <h5><span class="badge badge-danger">Select color</span></h5>
                                    <select name="color" class="form-control" id="color" >
                                        <option value="">Choose</option>
                                        <option style="color:#FE5B48;" value="#FE5B48">&#9724; Red</option>
                                        <option style="color:#FF9815;" value="#FF9815">&#9724; Orange</option>
                                        <option style="color:#FDE308;" value="#FDE308">&#9724; Yellow</option>
                                        <option style="color:#43F92B;" value="#43F92B">&#9724; Green</option>
                                        <option style="color:#3A47D3;" value="#3A47D3">&#9724; Blue</option>
                                        <option style="color:#6D28F3;" value="#6D28F3">&#9724; Indigo</option>
                                        <option style="color:#8D27F4;" value="#8D27F4">&#9724; Violet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Start</span></h5>
                                    <input type="text" class="form-control" name="start" id="start" readonly>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">End</span></h5>
                                    <input type="text" class="form-control" name="end" id="end" readonly>
                                </div>
                                
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" id="closing" class="btn btn-secondary">Cancel</button>
                        <button type="submit" name="btn_calendar" id="btn_calendar" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>  

    <div id="calendarModalUpdate" tabindex="-1" class="modal fade left" aria-hidden="true" role="dialog" aria-labell="calendarModalUpdate">
        <div class="modal-dialog modal-side modal-top-left" role="document">
            <div class="modal-content">
                <!--Modal Header-->

                <div class="modal-header danger-color">
                    <h5 class="modal-title text-white"><i class="fas fa-calendar-alt"></i> Calendar Schedule</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-labell="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <!--Modal Body-->

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="../data/calendar.data.php" method="POST" id="calendarForm" role="form">
                               <input type="hidden" name="id" id="id">
                               <div class="form-group">
                                    <h5><span class="badge badge-danger">Title</span></h5>
                                    <input type="text" class="form-control" name="title" required id="title" placeholder="title">
                               </div>
                               <div class="form-group">
                                    <h5><span class="badge badge-danger">Select color</span></h5>
                                    <select name="color" class="form-control" required id="color">
                                        <option value="">Choose</option>
                                        <option style="color:#FE5B48;" value="#FE5B48">&#9724; Red</option>
                                        <option style="color:#FF9815;" value="#FF9815">&#9724; Orange</option>
                                        <option style="color:#FDE308;" value="#FDE308">&#9724; Yellow</option>
                                        <option style="color:#43F92B;" value="#43F92B">&#9724; Green</option>
                                        <option style="color:#3A47D3;" value="#3A47D3">&#9724; Blue</option>
                                        <option style="color:#6D28F3;" value="#6D28F3">&#9724; Indigo</option>
                                        <option style="color:#8D27F4;" value="#8D27F4">&#9724; Violet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">Start</span></h5>
                                    <input type="text" class="form-control" name="start" id="start" readonly>
                                </div>
                                <div class="form-group">
                                    <h5><span class="badge badge-danger">End</span></h5>
                                    <input type="text" class="form-control" name="end" id="end" readonly>
                                </div>
                               <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="deleteCheckBox">
                                    <label for="deleteCheckBox" class="custom-control-label check-status strikethrough">Click this if you want to delete data</label>
                               </div>
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" data-dismiss="modal" id="closing" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-danger" id="deleteSchedule" style="display:none;"><i class="fas fa-trash"></i> Delete</button>
                        <button type="submit" name="btn_calendar_update" id="btn_calendar_update" class="btn btn-primary"><i class="fas fa-plus fa-lg"></i> Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>  

    <div class="card_container">
            <div id="calendar"></div>
    </div>
       
            
        </div>
    </div>
    <?php include_once 'footer.php'?>