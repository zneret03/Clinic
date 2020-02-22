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

        //Appointments Credentials insert into database
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

        //Appointmnets and time insert into database returning last inserted ID
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

        //Counting all the data inserted into appointments table
        public function countAppointments()
        {
            return $this->getAppointments();
        }

        //Selecting all data from selected row returning specific data
        public function setAppointmentsCredentials($app_code_id)
        {
            return $this->getAppointmentsCredentials($app_code_id);
        }

        public function getDataAppointments($app_update)
        {
            $this->updateAppointments($app_update);
        }

        public function deleteAppointments($delete_app)
        {
            $this->deleteCredentials($delete_app);
        }

    }