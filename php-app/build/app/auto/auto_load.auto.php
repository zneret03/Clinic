<?php
    spl_autoload_register('class_name');

    function class_name($className)
    {
        $path = "../view/";
        $extension = ".view.php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath))
        {   
            return false;
        }

        require_once $fullPath;
    }
?>