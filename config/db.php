<?php 
          ob_start();
    if(!isset($_SESSION)) {
     session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestao_hospitalr";
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
    $base_url ="http://localhost/gestaohospitalar/";  
?>