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
            $appointments_credential = array(
                $appointments[0],
                $appointments[1],
                $appointments[2],
                $appointments[3],
                $appointments[4],
                $appointments[5],
                $appointments[6],
                $appointments[7],
                $appointments[8],
                $appointments[9],
                $appointments[10]
            );

            $time_payments = array(
                $appointments['11'],
                $appointments['12']
            );

            //for user credentials
            while($appointments_credential)
            {
                $value = count($appointments_credential);
                if($value == 11)
                {
                    $this->appointmentsCredentials($appointments_credential);
                    exit;
                }
            }
            
            /*
            while($time_payments)
            {
                $payments = count($time_payments);
                if($payments == 2)
                {
                    $this->time_payments($time_payments[1]);
                    exit;
                }
            }
            */
        }
    }