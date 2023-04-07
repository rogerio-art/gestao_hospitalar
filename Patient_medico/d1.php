<?php 
include("../inc/connect.php") ;
if(isset($_GET['id']))
      {
      	$sql="DELETE FROM addmedicalhistory WHERE  id=".$_GET['id']."";
      	//exit;
      	$write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
              header("location:casehistory.php");
      }
      else
      	echo "Not Sucess";
   ?>