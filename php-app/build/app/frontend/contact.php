<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../../src/assets/css/main.css">
        <title>Contacts</title>
</head>
<body>
        <?php include_once 'header.php'?>

        <div class="cont_elements">
                <img src="../../Images/background/contact_des.svg" alt="Contact background design">
                <p>Drop as line</p> 
                
                <form action="" id="validate">
                    <input type="text" name="name" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name">Name</span>
                    </label>
                    
                    <input type="text" name="lstname" autocomplete="off" required>
                    <label for="lstname" class="label-lstname">
                        <span class="content-lstname">Last name</span>
                    </label>

                    <input type="text" name="email" autocomplete="off" required>
                    <label for="email" class="label-email">
                        <span class="content-email">Email</span>
                    </label>

                    <input type="text" name="contact" autocomplete="off" required>
                    <label for="contact" class="label-contact">
                        <span class="content-contact">Contact No</span>
                    </label>
                    <br>
                    <button type="submit">Send</button>
                </form>
            </div>

            <?php include_once 'footer.php'?>
            <script type="text/javascript"  src="../../src/assets/js/vendors/jquery.min.js"></script>
            <script src="../../src/assets/js/main.js"></script>
</body>
</html>