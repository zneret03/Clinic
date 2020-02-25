<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/mdb.min.css">

    <script src="../../../src/assets/js/vendors/fontawesome.js"></script>
    <script src="../../../src/assets/js/vendors/solid.js"></script>
    <title>Reset password</title>
</head>
<body>
    <div class="container">
        <form action="">
        <div class="row justify-content-center">
            <div class="card mt-5" style="width: 25em; margin: 0 auto;">
                <div class="card-header aqua-gradient">
                    <h5 class="text-white"><i class="fas fa-key fa-sm"></i> Change Password</h5>
                </div>
                <!--card body-->
                <div class="card-body">
                    <div class="form-group">
                        <h4><span class="badge badge-danger">New Password</span></h4>
                        <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="new password">
                    </div>
                    <div class="form-group">
                    <h4><span class="badge badge-danger">Confirm Password</span></h4>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="confirm password">
                    </div>
                </div>
                <!--card body-->
                <!--card footer-->
                <div class="card-footer" style="background-color:#FFF;">
                    <button type="text" class="btn btn-primary float-right">Reset password</button>
                </div>
                <!--card footer-->
            </div>
        </div>
        </form>
    </div>
<!--JQuery-->
<script src="../../../src/assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
<!--JQuery-->
<!--Bootstrap and material design-->
<script src="../../../src/assets/Bootstrap/js/bootstrap.min.js"></script>
<script src="../../../src/assets/Bootstrap/js/mdb.min.js"></script>
<!--Bootstrap and material design-->
<script src="../../../src/assets/js/vendors/validate.js"></script>
</body>
</html>