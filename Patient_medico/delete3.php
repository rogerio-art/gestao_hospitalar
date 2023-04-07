<?php 
include("../inc/connect.php") ;
if(isset($_GET['id']))
      {
      	$sql="DELETE FROM patientregister WHERE  id=".$_GET['id']."";
      	//exit;
      	$write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
              header("location:patient.php");
      }
      else
      	echo "Sem Sucesso";
   ?>