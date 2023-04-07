<?php
include('./config/db.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($connection,"select nomemedico,id_medico from medicos where especialidade='".$_POST['specilizationid']."'");?>
 <option selected="selected">Selecione o Médico </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['nomemedico']); ?>"><?php echo htmlentities($row['nomemedico']); ?></option>
  <?php
}

}
?>

<?php

if(!empty($_POST["Price"])) 
{

 $sql=mysqli_query($connection,"select Id, Preco from especialidade  where Nome='".$_POST['Price']."'");?>
 <option selected="selected">Selecione o Preço </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['Preco']); ?>"><?php echo htmlentities($row['Preco']); ?></option>
  <?php
}
}


