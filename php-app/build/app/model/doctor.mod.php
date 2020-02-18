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

            protected function appointmentsCredentials($appointments)
            {
                try 
                {    
                    $fetchDataDoctor = new doctor();
                    $appointments_sql = "INSERT INTO appointments_credentials 
                    (
                        app_cred_id,
                        firstname,
                        middlename,
                        lastname,
                        customerAddress,
                        phoneNo,
                        Email,
                        Notes,
                        Age,
                        gender,
                        doctor_id,
                        app_time,
                        payments_id
                    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
                    
                    $getData = $fetchDataDoctor->executeQuery($appointments,$appointments_sql);

                    if($getData->rowCount() > 0)
                    {
                        echo "<script>alert('Successfully Inserted'); window.location='../frontend/appointments.php'</script>";
                    }

                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());       
                }
            }

            //Save total payments time and returning the last inserted ID 
            protected function payment($payment)
            {
                try 
                {
                    $user_payment = new doctor();
                    $payment_query = "INSERT INTO payments(bill) VALUES (?)";
                    $getLastInsertedId_payments = $user_payment->executeQuery([$payment],$payment_query);

                    if($getLastInsertedId_payments->rowCount() > 0)
                    {
                        $lastInsert = "SELECT max(payments_id) FROM payments";
                        $stmt = $this->connect()->prepare($lastInsert);
                        $stmt->execute();
                        $id = $stmt->fetch();

                        return $id;
                    }
                    
                } 
                catch (PDOException $ex) 
                {
                   var_dump($ex->getMessage());
                }
            }

            //Save appointments time and returning the last inserted ID 
            protected function appointments_time($appointments_time)
            {
                try 
                {
                    $user_appointment_time = new doctor();
                    $appointment_query = "INSERT INTO Appointments_time (appointments_time) VALUES (?)";
                    $getlastInsertedId_appoint_Time = $user_appointment_time->executeQuery([$appointments_time],$appointment_query);

                    if($getlastInsertedId_appoint_Time->rowCount() > 0)
                    {
                        $lastInsert = "SELECT max(app_time) FROM Appointments_time";
                        $stmt = $this->connect()->prepare($lastInsert);
                        $stmt->execute();
                        $id = $stmt->fetch();

                        return $id;
                    }
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }

            public function fetchAppointments()
            {
                try 
                {
                   $fetch_appointments_time = "SELECT 
                   app_cred_id,
                   firstname,
                   middlename,
                   lastname,
                   appointments_time 
                   FROM 
                   appointments_credentials 
                   INNER JOIN Appointments_time 
                   ON Appointments_time.app_time = appointments_credentials.app_time";
                   
                   $stmt = $this->connect()->prepare($fetch_appointments_time);
                   $stmt->execute();
                   $result = $stmt->fetchAll();
                   
                   return $result;
                } 
                catch (PDOException $ex) 
                {
                    var_dump($ex->getMessage());
                }
            }

            protected function getAppointments()
            {
                try 
                {
                    $get_Appointments = "SELECT count(app_cred_id) FROM appointments_credentials";
                    $stmt = $this->connect()->prepare($get_Appointments);
                    $stmt->execute();

                    $result = $stmt->fetch();

                    foreach($result as $values)
                    {
                        echo $values; 
                    }
                } 
                catch (PDOException $ex) {
                    var_dump($ex->getMessage());
                }
            }
    }