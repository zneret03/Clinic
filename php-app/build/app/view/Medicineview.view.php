<?php
    include_once '../auto/auto_load.mod.php';
    include_once '../model/medicine.mod.php';
    include_once '../controller/Medicinecontr.con.php';

    class Medicineview extends Medicinecontr
    {
        public function medicineValidation()
        {
            echo "<div class='alert alert-warning animated fadeIn'>";
            echo "<strong>ERROR</strong> That medicine name has been used already";
            echo "</div>";
        }

        public function countMedicine()
        {
            return $count = $this->MedicineNum();
        }
    }