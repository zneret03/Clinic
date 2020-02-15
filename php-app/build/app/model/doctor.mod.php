 <?php   
    include_once 'connection.mod.php';
    
    class doctor extends connection
    {
            //Check error occur in database
            private function errorInf($stmt)
            {
                $error = $stmt->errorInfo();
                echo $error[2];

                if($stmt == false)
                {
                    echo "Error query";
                }
            }

            private function executeQuery($data,$sql)
            {
                $err = new doctor();
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute($data);

                $err->errorInf($stmt);

                return $stmt;
            }

            protected function countDoctor()
            {
                try 
                {
                   $countDoc = "SELECT count(doctor_id) FROM doctor";
                   $stmt = $this->connect()->prepare($countDoc);
                   $stmt->execute();
                   $count = $stmt->fetch();

                   foreach($count as $val)
                   {
                       echo $val;
                   }

                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }

            protected function insertDoctor($doctor)
            {   
                try 
                {
                    $createDoctor = new doctor();
                    $sql = "INSERT INTO doctor (doctor_id, firstname, middlename, lastname, abbreviation, doc_address, age, gender) 
                    VALUES (?,?,?,?,?,?,?,?)";
                    $getData = $createDoctor->executeQuery($doctor,$sql);
                    if($getData->rowCount() > 0)
                    {
                        echo "<script>alert('Successfully Inserted'); window.location='../includes/add_doctor.php'</script>";
                    }
                   
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());    
                }
            }

            protected function fetchDoctor($doctor_id)
            {
                try 
                {
                    $fetchDataDoctor = new doctor();
                    $sql = "SELECT * FROM doctor WHERE doctor_id = ?";
                    $getData = $fetchDataDoctor->executeQuery([$doctor_id],$sql);
                    $result = $getData->fetch();
                    $arr = array();

                    foreach($result as $values)
                    {
                        $arr[] = $values;
                    }

                    return $arr;
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }

            protected function update_DoctorCredenitials($update_doctor)
            {
                try 
                {
                    $updateDoctor = new doctor();
                    $sql = "UPDATE doctor SET 
                    firstname = ?, 
                    middlename = ?, 
                    lastname = ?, 
                    abbreviation = ?, 
                    doc_address = ?, 
                    age = ?, 
                    gender = ? 
                    WHERE doctor_id = ?";
                    
                    $updateDoctor->executeQuery($update_doctor,$sql);

                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }
            
            protected function DeleteDoctorCred($doctor_id)
            {
                try 
                {
                    $deleteDoctor = new doctor();
                    $delete_sql = "DELETE FROM doctor WHERE doctor_id = ?";
                    $deleteDoctor->executeQuery([$doctor_id],$delete_sql);
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }

            protected function randomDoctor()
            {
                $doctorRandom = "SELECT doctor_id,firstname,middlename,lastname FROM doctor ORDER BY RAND() LIMIT 1";
                $stmt = $this->connect()->prepare($doctorRandom);
                $stmt->execute();
                $data = array();
                while($rand = $stmt->fetch())
                {
                    $data[] = $rand['doctor_id'];
                    $data[] = $rand['firstname'];
                    $data[] = $rand['middlename'];
                    $data[] = $rand['lastname'];
                }

                return $data;
            }

            protected function setAppointments($appointments)
            {
                try 
                {
                    $SQL = "";
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());       
                }
            }
    }