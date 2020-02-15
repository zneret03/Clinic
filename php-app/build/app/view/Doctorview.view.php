<?php
    include_once '../controller/Doctorcontr.con.php';
    class Doctorview extends Doctorcontr
    {
        public function doctorNum()
        {
            return $this->countDoctors();
        }

        public function fetchRandomDoctor()
        {
            return $this->randDoctor();
        }
    }