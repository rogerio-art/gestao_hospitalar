<?php 
include("../inc/connect.php") ;
if(isset($_GET['id']))
      {
      
      	$sql="DELETE FROM addappointment WHERE  id=".$_GET['id']."";
      	
      	$write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
              header("location:upcomming.php");
      }
      else
      	echo "Not Sucess";
   ?>