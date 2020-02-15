<?php

    spl_autoload_register('view_autload');

    function view_autload($checkClass)
    {
        $path = "../model/";
        $extension = ".mod.php";
        $fullPath = $path . $checkClass . $extension;

        if (!file_exists($fullPath)) {
            return false;
        }

        require_once $fullPath;
    }