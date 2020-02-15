<?php
    include_once 'connection.mod.php';
    class calendar extends connection
    {
        private function errorInf($stmt)
        {
            $error = $stmt->errorInfo();
            echo $error[2];

            if($stmt == false)
            {
                echo "Error query";
            }
        }

        //execute
        private function executeData($data,$query)
        {
           $error = new calendar();
           $stmt = $this->connect()->prepare($query);
           $error->errorInf($stmt);
           $stmt->execute($data);

           return $stmt;
        }

        protected function insertCalendar($calendarDetails)
        {
            $func = new calendar();
            try
            {
                $error = new calendar();
                $sql = "INSERT INTO scheduller (sheduller_id, title,color,start_event,end_event) VALUES (?, ?, ?, ?, ?)";
                $val = $func->executeData($calendarDetails,$sql);
                
                if($val->rowCount() > 0)
                {
                    echo "<script>alert('Data save successfuly'); window.location='../includes/scheduller.php';</script>";
                }

                $error->errorInf($stmt);

            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        public function fetchCalendar()
        {
            try 
            {
                $error = new calendar();
                $select = "SELECT sheduller_id, title, color, start_event, end_event FROM scheduller";
                $stmt = $this->connect()->prepare($select);
                $stmt->execute();
                $result = $stmt->fetchAll();

                $error->errorInf($stmt);

                return $result;
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());
            }
        }

        protected function DeleteSheduler($data)
        {
            $func = new calendar();
            try 
            {
                $delete = "DELETE FROM scheduller WHERE sheduller_id = ?";
                $func->executeData([$data],$delete);
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMassage());
            }
        }
        
        protected function updateSchedule($data)
        {
            try 
            {
                $stmt;
                $func = new calendar();
                
                while($data) 
                { 
                    $value = count($data);

                    if($value == 3)
                    {
                        $update = "UPDATE scheduller SET start_event = ? ,end_event = ? WHERE sheduller_id = ?";
                        $func->executeData($data,$update);
                        //print_r($data);
                        exit();
                    }
                    else
                    {
                        $update = "UPDATE scheduller SET title = ? ,color = ? ,start_event = ? ,end_event = ? WHERE sheduller_id = ?";
                        $val = $func->executeData($data,$update);
        
                        if($val->rowCount() > 0)
                        {
                            echo "<script>alert('update  successfuly'); window.location='../includes/scheduller.php';</script>";
                        }
                        exit();
                    }
                   
                }
              
                
            } 
            catch (PDOException $ex) 
            {
                var_dump($ex->getMessage());    
            }
        }
    }