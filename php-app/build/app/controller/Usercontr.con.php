<?php
    include_once '../auto/auto_load.auto.php';
    include_once '../auto/auto_load.mod.php';
    error_reporting(-1);
    ini_set('displa errors','On');
    
    class Usercontr extends User
    {
        //Fetch user credentials
        public function UserCred($USERNAME, $PASSWORD)
        {
                $userCredintials = new Userview();
                $result = $this->getUser($USERNAME,$USERNAME);
                $user = array();

                while($result)
                {
                    $user[] = $result['user_code'];
                    $user[] = $result['user_email'];
                    $user[] = $result['username'];
                    $user[] = $result['fname'];
                    $user[] = $result['mname'];
                    $user[] = $result['lname'];
                    $user[] = $result['pwd'];
                    $user[] = $result['usertype'];

                    if($user[6] != $PASSWORD)
                    {
                        $userCredintials->notRegisterAccount();
                        exit();
                    }
                    return $userCredintials->setUserAction($user,$PASSWORD);
                    
                }
        }

        //check redundant data from database else save data
        public function setUser($UserCredinitial)
        {
                $validationForm = new Userview();
                $result = $this->validateUser($UserCredinitial);
                foreach($result as $values)
                {
                    if($values !== false)
                    {
                        return $validationForm->validationForm();
                        exit();
                    }
                }
                $this->createUser($UserCredinitial);
        }
        
        //Fetch data from database ang throw it to the model
        public function fetchUserAccount($account)
        {
            return $this->fetchData($account);
        }

        public function getAccountData($account_data)
        {
            $this->updateAccount($account_data);
        }

        public function getAccountId($account_id)
        {
            $this->deleteaccount($account_id);
        }

        //Login time
        public function setTime($loginTime)
        {
            return $this->loginTime($loginTime);
        }

        //logout time
        public function getlogoutTime($logout)
        {
            $this->logoutTime($logout);
        }
        
        public function lastInsertId()
        {
            return $this->getLastInserted();
        }

        public function timeFetch()
        {
            return $this->fetchTime();
        }

        public function fetchUsersOnline()
        {
            return $this->getOnlineUsers();
        }

        public function countOnlineUsers()
        {
            return $this->getOnlineUsers();
        }

        public function DeleteTmime($time)
        {
            $this->deleteTime($time);
        }

        public function getAccounts()
        {
            $this->getAccountsInserted();
        }

        public function token($token)
        {
            $userEmail = new Userview();
            $result = $this->validate_token($token[0]);
            foreach($result as $val)
            {
                if($val !== false)
                {
                    return $userEmail->email($token[0],$val["reset_token"]);
                    exit;
                }
            }
            $this->data_token($token);
        }

    }
