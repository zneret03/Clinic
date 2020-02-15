<?php
    include_once 'connection.mod.php';
    class Medicine extends connection
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

        private function executeQuery($data,$sql)
        {
            $err = new Medicine();
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute($data);

            $err->errorinf($stmt);

            return $stmt;
        }

        //Select all from medicine table
        protected function getMedicine($medicine_code)
        {
            try 
            {
                $fetchMedicine = new Medicine();
                $selectMed = "SELECT * FROM medicine WHERE medicine_code = ?";
                //$stmt = $this->connect()->prepare($selectMed);
                //$stmt->execute([$medicine_code]);
                $getData = $fetchMedicine->executeQuery([$medicine_code],$selectMed);

                $result = $getData->fetch();
                $medicine_data = array();

                foreach ($result as $values) 
                {
                    $medicine_data[] = $values;
                }

                return $medicine_data;
            } 
            catch (PDOException $ex) 
            {
                echo "Exception ->";
                var_dump($ex->getMessage());
            }
        }
        
        //Count medicine for dashboard
        protected function countMed()
        {
            try 
            {
                $err = new Medicine();
                $countRows = "SELECT count(medicine_code) FROM medicine";
                $stmt = $this->connect()->prepare($countRows);
                $stmt->execute();
                $count = $stmt->fetch();
                
                foreach ($count as $values) {
                        echo $values;
                }

                $err->errorinf($stmt);
            } 
            catch (PDOException $ex) 
            {
                echo "Exception ->";
                var_dump($ex->getMessa());
            }
        }

        //Check for redudancy in medicine name and other name attribute in database
        protected function checkRedundancy($medicine)
        {
            try 
            {
                $redundant = new Medicine();
                $sql = "SELECT medicine_name,other_name FROM medicine WHERE medicine_name = ? OR other_name = ?";
                $dataRedundant = array(
                    $medicine[1],
                    $medicine[5]
                );

                $getData = $redundant->executeQuery($dataRedundant,$sql);
                $result = $getData->fetchAll();


                return $result;
            } 
            catch (PDOException $ex) 
            {
               echo "Exception ->";
               var_dump($ex->getMessage());
            }
        }

        //Insert Medicine data in database
        protected function insertMedicine($medicine)
        {
            try 
            {
                $createmedicine = new Medicine();
                $med_query = "INSERT INTO medicine (medicine_code,medicine_name,medicine_brand,unit,quantity,other_name,description)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
                $getData = $createmedicine->executeQuery($medicine,$med_query);

                if($getData->rowCount() > 0)
                {
                    echo "<script>alert('Data save successfuly'); window.location='../includes/medicine.php';</script>";
                    unset($UserCredinitial);
                }
            } 
            catch (PDOException $ex) {
                echo "Exception->";
                var_dump($ex->getMessage());
            }
        }

        //Update all Medicine data in database
        protected function updateMedicine($medicine)
        {
            try 
            {
                $updateData = new Medicine();
                $update = "UPDATE medicine 
                SET medicine_name = ?,
                medicine_brand = ? ,
                unit = ?,
                quantity = ?,
                other_name = ?,
                description = ? 
                WHERE medicine_code = ?";
                
                $updateData->executeQuery($medicine,$update);
            } 
            catch 
            (PDOException $ex) 
            {
               echo "Excption->";
               var_dump($ex->getMessage());
            }
        }


        //Delete Data From Medicine Database
        protected function delete_Medicine($medicine_code)
        {
            try 
            {
                $deleteMed = new Medicine();
                $delete_sql = "DELETE FROM medicine WHERE medicine_code = ?";
                
                $deleteMed->executeQuery([$medicine_code],$delete_sql);
            } 
            catch (PDOException $ex) 
            {
                echo "Excpetion - >";
                var_dump($ex->getMessage());
            }
        }
    }