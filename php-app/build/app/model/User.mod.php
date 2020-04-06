<?php
    include_once 'connection.mod.php';
    class User extends connection
    {

        //Check error occur in database
        function errorinf($stmt)
        {
            $error = $stmt->errorInfo();
            echo $error[2];

            if ($stmt === false) {
                echo "Error query";
            }
        }

        private function executeQuery($data, $sql)
        {
            $error = new User();
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute($data);
            $error->errorinf($stmt);
            
            return $stmt;
        }

        protected function getAccountsInserted()
        {
            try 
            {
                $getAccount = "SELECT count(user_code) FROM users";
                $stmt = $this->connect()->prepare($getAccount);
                $stmt->execute();
                $count = $stmt->fetch();

                foreach($count as $values)
                {
                    echo $values;
                }
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        //fetch Account data from database
        protected function fetchData($account)
        {
            try 
            {
                $err = new User();
                $sql = "SELECT 
                user_code,
                user_email,
                username,
                fname,
                mname,
                lname,
                usertype
                FROM users WHERE user_code = ?";

                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$account]);
                $result = $stmt->fetch();
                $account_data = array();

                foreach ($result as $value) {
                        $account_data[] = $value;
                }
                

                $err->errorinf($stmt);

                return $account_data;
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
            
        }

        //Select Username and Email get access
        protected function getUser($username,$user_email)
        {
            try 
            {
                $err = new User();
                $sql = "SELECT * FROM users WHERE username = ? OR user_email = ?";
                $user = array(
                    $username,
                    $user_email
                );

                $getData = $err->executeQuery($user,$sql);
                $result = $getData->fetch();

                return $result;
            } 
            catch (Exception $e) 
            {
               var_dump($e->getMessage());
            }
        }

        //Check redudant data
        function validateUser(array $UserCredinitial)
        {
            try 
            {
                $err = new User();
                $sql = "SELECT user_email,username FROM users WHERE user_email = ? OR username = ?";
                $data = array(
                    $UserCredinitial[1],
                    $UserCredinitial[2]
                );
                $getData = $err->executeQuery($data,$sql);
                $result = $getData->fetchAll();
                
                return $result;
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        //Create user and save to the database
        protected function createUser(array $UserCredinitial)
        {
            try 
            {
                $create = new User();
                $Query = "INSERT INTO users (user_code, user_email, username, fname, mname, lname, pwd, usertype, date_created) 
                VALUES (?,?,?,?,?,?,?,?,?)";
                $getData = $create->executeQuery($UserCredinitial, $Query);
                
                if($getData->rowCount() > 0)
                {
                    echo "<script>alert('Data save successfuly'); window.location='../includes/account.php';</script>";
                    unset($UserCredinitial);
                }
                else
                {
                    $err->errorinf($stmt);
                } 
            } 
            catch (Exception $e) 
            {
                var_dump($e->getMessage());
            }
        }

        //Update User from database
        protected function updateAccount($account_data)
        {
            $update = new User();
            try 
            {
                $update_sql = "UPDATE users SET 
                user_email = ?,
                username = ?,
                fname = ?,
                mname = ?,
                lname = ?,
                usertype = ?,
                date_updated = ?
                WHERE user_code = ?";  
                $update->executeQuery($account_data,$update_sql);
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        //Delete user from database
        protected function deleteaccount($account_id)
        {
            try 
            {
               $delete_account = "DELETE FROM users WHERE user_code = ?";
               $delete = new User();
               $delete->executeQuery([$account_id],$delete_account);
            } 
            catch 
            (PDOException $ex) 
            {

                var_dump($ex->getMessage());    
            }
        }

        protected function loginTime($loginTime)
        {
            try 
            {
                $sql_loginTime = "INSERT INTO login_logout (user_code, login_time, statusColor) VALUES (?, ?, ?)";

                $login = new User();
                $login->executeQuery($loginTime,$sql_loginTime);
            } 
            catch (PDOException $ex)
            {
                var_dump($ex->getMessage());
            }
        }

        protected function getLastInserted()
        {
            try 
            {
                $lastInserted = "SELECT max(check_id)
                FROM login_logout";
                $stmt = $this->connect()->prepare($lastInserted);
                $stmt->execute();
                $value = $stmt->fetch();
                
                $arr = array();
                foreach($value as $val)
                {
                    $arr[] = $val;
                }

                return $val;
                    
                $err = new User();
                $err->errorinf($stmt);
            } 
            catch (PDOException $ex) 
            {
               var_dump($ex->getMessage());
            }
        }

        protected function logoutTime($logout)
        {
            try 
            {
                $login_logout_quert = "UPDATE login_logout 
                INNER JOIN users ON users.user_code = 
                login_logout.user_code SET logout_time = ?, statusColor = ?
                WHERE check_id = ?";
                $stmt = $this->connect()->prepare($login_logout_quert);
                $stmt->execute($logout);
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }
        
        protected function fetchTime()
        {
            try 
            {
                $time_select = "SELECT 
                check_id,
                user_email,
                login_time,
                logout_time,
                statusColor 
                FROM login_logout 
                INNER JOIN users 
                ON users.user_code = login_logout.user_code LIMIT 4";

                $stmt = $this->connect()->prepare($time_select);
                $stmt->execute();
                $fetch_Time = $stmt->fetchAll();

                $err = new User();
                $err->errorinf($stmt);

                return $fetch_Time;
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        protected function getOnlineUsers()
        {
            try 
            {
                $onlineUsers = "SELECT 
                check_id,
                user_email,
                fname,
                mname,
                lname,
                username,
                usertype,
                statusColor 
                FROM login_logout 
                INNER JOIN users 
                ON users.user_code = login_logout.user_code";

                $stmt = $this->connect()->prepare($onlineUsers);
                $stmt->execute();
                $result = $stmt->fetchAll();

                return $result;
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        protected function deleteTime($time)
        {
            try 
            {
                $delete_Time = "DELETE FROM login_logout WHERE check_id = ?";
                $delTime = new User();
                $getData = $delTime->executeQuery([$time],$delete_Time);
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }
        
        //Insert token for forgot user password
        protected function data_token($data_token)
        {
            try 
            {
                $sqlquery = new User();
                $Select_Id = "SELECT user_code FROM users WHERE user_email = ?";
                $getdata = $sqlquery->executeQuery([$data_token[0]],$Select_Id);
                $result =  $getdata->fetch();

                while($result)
                {
                    array_push($data_token,$result['user_code']);
                    $insert_Token = "INSERT INTO password_reset (email,reset_selector,reset_token,reset_expires,user_code) VALUES (?,?,?,?,?)";
                    $sqlquery->executeQuery($data_token,$insert_Token);
                    //print_r($data);
                    exit;
                }
                
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        protected function validate_token($token)
        {
            try 
            {
                $sqlquery = new User();
                $identify_email = "SELECT reset_selector,reset_token,reset_expires FROM password_reset WHERE email = ?";
                $getData = $sqlquery->executeQuery([$token],$identify_email);
                $result = $getData->fetch();

                $data = array();
                foreach($result as $value)
                {
                    $data[] = $result;
                }
                return $data;
            } 
            catch (PDOException $ex) {
                  var_dump($ex->getMessage());
            }
        }
    }


