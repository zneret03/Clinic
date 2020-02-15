<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../../../src/assets/css/main.css">
<title>Welcome | CLife Clinic</title>
</head>
<body>
<div class="container">
                <header>
                        <img src="../../Images/logo/drawing.svg" class="logo" alt="website logo">
                        <nav>
                        <ul class="nav" id="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="appointments.php">Appointments</a></li>
                                <li><a href="includes/Login.php" class="btn_login">Login</a></li>
                        </ul>
                        </nav>
                </header>

                <div class="background">
                        <img src="../../Images/background/Backgroundsvg.svg" class="background" alt="Background design">
                        <div class="image_logo"><img src="../../Images/logo/logo.svg" class="logo2" alt=""></div>
                        <div class="statement">
                        <a href="#">Welcome to CLife Clinic</a>
                        </div>
                        <div class="statement2">
                                <a href="#">Your Health is our PRIORITY.</a>
                        </div>
                </div>
        </div>
        
        <div class="arrowdown"> 
                <img src="../../Images/icons/arrowDown.svg" >
        </div>

        <div class="card_container">
                <div class="cards">
                        <img src="../../Images/cards/afliction.svg" class="img" alt="avatar" style="width:100%;">
                        <h1>Tips how to avoid fever :</h1>
                        <p>Although a fever (pyrexia) could be considered any 
                                body temperature above 
                                the normal temperature of 98.6 degrees Fahrenheit (98.6 F or 37 C).
                        </p>
                        <a href="https://www.healthline.com/health/how-to-break-a-fever" class="card_btn">Learn more</a>
                </div>
                
                <div class="cards">
                        <img src="../../Images/cards/Laboratory 01.jpg" class="img_avatar" alt="avatar" style="width:100%; height: 48%;">
                        <h1>How to avoid bacteria :</h1>
                        <p>Practice good hygiene, such as frequent hand washing. 
                                Fortify your immune system with healthy foods such as fruits and vegetables. 
                                Eating more veggie.
                        </p>
                        <a href="https://www.sharecare.com/health/prevention-of-bacterial-infection" class="card_btn">Learn more</a>
                </div>
                
                <div class="cards">
                        <img src="../../Images/cards/sick_child.svg" class="img" alt="avatar" style="width:100%;">
                        <h1>how to avoid Dengue fever : </h1>
                        <p>Dengue fever is a mosquito-borne virus affecting more than 390 million people each year.
                                While the disease is generally mild, it can be deadly.
                        </p>
                        <a href="" class="card_btn">Learn more</a>
                </div>
        </div>

        <div class="cont">
                <div class="container">
                        <h1>Start your free account now!</h1>
                        <a href="includes/Login.php">Getting Started</a>
                </div>
        </div>
        <?php include_once 'footer.php';?>
<script type="text/javascript"  src="../../src/assets/js/vendors/jquery.min.js"></script>
<script src="../../src/assets/js/main.js"></script>

</body>
</html>