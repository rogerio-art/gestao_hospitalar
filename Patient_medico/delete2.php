
<?php 
include("../inc/connect.php") ;
if(isset($_GET['id']))
      {
      	$fetch="SELECT * FROM addpayment WHERE id=".$_GET['id']."";
      	$q=mysqli_query($connection,$fetch) or die(mysqli_error($connection));
		$result=mysqli_fetch_array($q);
     //print_r($result['patient']); exit();
      	$sql="DELETE FROM addpayment WHERE  id=".$_GET['id']."";
      	//exit;
      	$write =mysqli_query($connection,$sql) or die(mysqli_error($connection));

     
header("location:paymenthistory.php?id=".$result['patient']);
      }
      else
      	echo "Sem Sucesso";
   ?>