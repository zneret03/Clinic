<?php include_once 'header.php';?>
<div class="container">
    <h2>Appointments History</h2>
    <hr class="mt-5">
    <div class="text-right">
        <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-download"></i> Export</button>
    </div>
    
    <table class="table table-responsive table-striped text-center animated fadeIn" id="appointmentsTable">
    <thead>
        <th>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Notes</th>
                <th>doctor</th>
                <th>Time</th>
                <th>Bill</th>
                <th>Updates</th>
                <th>Delete</th>
            </tr>
        </th>
    </thead>
    </table>

    <div id="UpdateappointmentsModal" tabindex="-1" class="modal fade" aria-hidden="true" role="dialog" aria-labell="UpdateappointmentsModal">
        <div class="modal-dialog modal-lg" role="documents">
            <div id="content-data"></div>
        </div>
    </div>
</div>
<?php include_once 'footer.php';?>