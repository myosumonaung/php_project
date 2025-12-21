<?php
    include '../dbconnect.php';
    define('BASE_URL' , '/IT_blog/backend');

    // Routes
    function route($file){
        return BASE_URL . '/' . $file;
    }
?>