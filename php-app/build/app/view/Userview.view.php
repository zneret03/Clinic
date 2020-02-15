<?php
    include_once '../auto/auto_load.mod.php';
    include_once '../controller/Usercontr.con.php';
    class Userview extends Usercontr
    {
        function notRegisterAccount()
        {
            echo "<script>alert('Username and Password are not Registered'); window.location = '../includes/Login.php';</script>";
        }
        
        function checkSession($usertype,$userName,$userId)
        {
                session_start();
                if ($usertype == "Admin") 
                {
                    $_SESSION['UID'] = $userName;
                    $_SESSION['userID'] = $userId;
                    header('Location:../includes/admin.php');
                }
                else
                {
                    $_SESSION['username'] = $userName;
                    $_SESSION['userID'] = $userId;
                    header('Location:../includes/user.php');
                }
        }
        
        function validationForm()
        {
            echo "<div class='alert alert-warning animated fadeIn'>";
            echo "<strong>ERROR</strong> That email or username has been used already";
            echo "</div>";
        }
        
        public function userWelcome($welcome)
        {
                echo "<div class='alert alert-success animated fadeIn'>";
                echo "<strong>Welcome</strong> Admin, ".$welcome;
                echo "</div>";
        }

        
        public function setUserAction($user,$password)
        {            
                $login = new Userview();
                if ($password != $user[6]) {
                    echo "<script>alert('Wrong password please try again'); window.location='../includes/Login.php';</script>";
                }
                else if($password == $user[6]) {
                    $login->checkSession($user[7],$user[1],$user[0]);
                }

                return $user_code = $user[0];
               
        }
        
        //get lastinserted Id
        public function lastinsertId()
        {
            $id = new Usercontr();
            return $id->lastInsertId();
        }

        //get time
        public function getTime()
        {
            return $this->timeFetch();
        }

        public function countAccountsInserted()
        {
            return $this->getAccounts();
        }
        
        public function getUserOnline()
        {
            $color = $this->countOnlineUsers();
            $data = array();
            foreach($color as $value)
            {
                if($value['statusColor'] == "#42B72A")
                {
                    $data[] = $value['statusColor'];
                }
            }
            return $data;
        }
    }

    