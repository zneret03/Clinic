<?php
    class Connection
    {
        private $SERVERNAME  = "localhost";
        private $USERNAME  = "root";
        private $PASSWORD = "";
        private $DB  = "clinic";

        /*
        public function databaseConnection()
        {
            
            $connect = mysqli_connect($this->SERVERNAME,$this->USERNAME,$this->PASSWORD,$this->DB);

            if(!$connect)
            {
                die("Connection ERROR".mysqli_connect_error());
            }
            return $connect;
        }
        */

        public function connect()
        {     
            $dsn = 'mysql:host=' .$this->SERVERNAME. ';dbname=' .$this->DB;
            $pdo = new PDO($dsn, $this->USERNAME, $this->PASSWORD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
            
        }

    }
