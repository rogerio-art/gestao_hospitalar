<?php 


if(isset($_POST['submit']))

{
  $estado=$_POST['estado'];

   
      $write =mysqli_query($connection,"UPDATE addappointment SET estado='$estado' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
         
              header("location:today.php");
      }
      else
      	echo "Sem Sucesso";
   ?>