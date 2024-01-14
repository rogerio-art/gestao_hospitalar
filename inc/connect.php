<?php 

    // Enable us to use Headers
          ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
   
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestao_hospitalr";


    
    //     $hostname = "sql301.epizy.com";
    // $username = "epiz_28449683";
    // $password = "DCT0YdiiTju6fKO";
    // $dbname = "epiz_28449683_XXX";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
    

    $base_url ="http://localhost/gestaohospitalar/";
    
?>