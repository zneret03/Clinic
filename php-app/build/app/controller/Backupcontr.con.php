<?php

    class Backupcontr extends backup
    {
        public function export_databases($host,$username,$password,$databaseName,$tables = false,$backup_name = false)
        {
            $this->database($host,$username,$password,$databaseName,$tables = false,$backup_name = false);
        }
    }