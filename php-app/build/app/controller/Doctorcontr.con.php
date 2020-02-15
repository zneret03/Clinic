<?php
    //include_once '../auto/auto_load.mod.php';
    include_once '../model/doctor.mod.php';
    class Doctorcontr extends doctor
    {
        public function setDoctor($doctor)
        {
            $this->insertDoctor($doctor);
        }
        
        public function fetchDoctorData($fetch)
        {
            return $this->fetchDoctor($fetch);
        }

        public function updateDoctor($update)
        {
            $this->update_DoctorCredenitials($update);
        }

        public function deleteDoctor($doctor_id)
        {
            $this->DeleteDoctorCred($doctor_id);
        }

        public function countDoctors()
        {
            return $this->countDoctor();
        }

        public function randDoctor()
        {
            return $this->randomDoctor();
        }

        public function appointments($appointments)
        {
            return $appointments;
        }
    }