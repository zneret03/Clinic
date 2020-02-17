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
            
            $i = 0;
            $count = count($appointments);
            
            foreach ($appointments as $value) 
            {
                if($i++ < $count)
                {
                    $this->appointmentsCredentials($appointments);
                }
            }
            
        }

        public function payment_appointmentTime($payments_time)
        {
            $lastInsertedId_payments = $this->payment($payments_time[0]);
            $lastinsertedId_time = $this->appointments_time($payments_time[1]);
            
            $data_id = array(
             0 => $lastInsertedId_payments,
             1 => $lastinsertedId_time
            );
            
            return $data_id;
        }
    }