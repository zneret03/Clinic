<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../../src/assets/Bootstrap/css/mdb.min.css">

    <script src="../../../src/assets/js/vendors/fontawesome.js"></script>
    <script src="../../../src/assets/js/vendors/solid.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" name="forgot_password" id="forgot_password">
        <div class="row justify-content-center">
            <div class="card mt-5" style="width: 25em; margin: 0 auto;">
                <div class="card-header aqua-gradient">
                    <h5 class="text-white"><i class="fas fa-key fa-sm"></i> Reset Your Password</h5>
                </div>
                <!--card body-->
                <div class="card-body">
                    <p class="text-center">An e-mail will be send to you with instructions on how to reset your password</p>
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailPass" id="emailPass" placeholder="Email@yahoo.com">
                    </div>
                </div>
                <!--card body-->
                <!--card footer-->
                <div class="card-footer" style="background-color:#FFF;">
                    <button type="submit" class="btn btn-primary float-right" name="sendEmail" id="sendEmail">Send to Email</button>
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