<?php
    include_once '../auto/auto_load.auto.php';
    include_once '../auto/auto_load.mod.php';
    include_once '../model/medicine.mod.php';
    error_reporting(-1);
    ini_set('displa errors','On');

    class Medicinecontr extends Medicine
    {
        //Set Data attributes to be manipulated in model
        public function setMedicine($medicine)
        {
            $validation = new Medicineview();
            $check = $this->checkRedundancy($medicine);
            while($check)
            {
                if($check !== false)
                {
                    return $validation->medicineValidation();
                    exit();
                }
            }
            $this->insertMedicine($medicine);
        }

        public function get_Data_Medicine($medicine_code)
        {
            return $this->getMedicine($medicine_code);
        }

        public function set_data_Medicine($medicine_Data)
        {
            $this->updateMedicine($medicine_Data);
        }
        
        public function MedicineNum()
        {
            return $this->countMed();
        }
        
        public function delete_data_medicine($medicine_code)
        {
            $this->delete_Medicine($medicine_code);
        }
        
        
    }