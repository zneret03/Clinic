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

        public function getAppointmentsData()
        {
            return $this->countAppointments();
        }

        //fetching appointments data from database
        public function displayDataAppointments($dataAppointments)
        {
            return $this->setAppointmentsCredentials($dataAppointments);
        }
    }