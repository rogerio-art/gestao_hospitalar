<?php
include("../inc/connect.php") ;
if(isset($_POST['submit']))
      {
      	$set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) {
     	$s="DELETE FROM patientregister WHERE  id='".$k."'";
     	//echo "string"; exit;
     	mysqli_query($connection,$s)or die (mysqli_error($connection));
     	
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($connection));
            
              header("location:patient.php");
      }
      else
        if(isset($_POST['active']))
      {
        $set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) 
     {
      $s="UPDATE patientregister SET status='1' WHERE id='".$k."'";
  //echo $s; exit;
      mysqli_query($connection,$s)or die (mysqli_error($connection));
      
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($connection));
            
              header("location:patient.php");
      }
      else
        if(isset($_POST['inactive']))
      {
        $set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) 
     {
      $s="UPDATE patientregister SET status='0' WHERE id='".$k."'";
  //echo $s; exit;
      mysqli_query($connection,$s)or die (mysqli_error($connection));
      
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($connection));
            
              header("location:patient.php");
      }
      else
        echo "Sem sucesso";
?>