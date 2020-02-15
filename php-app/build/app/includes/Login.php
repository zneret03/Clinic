    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../../src/assets/css/main.css">
        <title>Sign in | CLife Clinic</title>
    </head>
    <body class="body">
        <div class="login_container">
            <div class="cards">
                <div class="align">
                        <img src="../../Images/logo/logo.svg" style="width: 30%;" class="login-logo">
                        <span>WELCOME</span>
                </div>
                <div class="int">
                    <form action="../data/account.data.php" method="POST" id="validate">
                            <input type="text" name="username" required  placeholder="Username/Email">
                            <input type="password" name="password" required   placeholder="Password">
                            
                            <button type="submit" name="btn_login">Login</button>
                            <a href="../frontend/index.php" class="cancel">  Cancel</a>
                    </form>
                    Forgot Password? | <a href="#">Help</a>
                </div>
            </div>
        </div>
    </body>
    </html>