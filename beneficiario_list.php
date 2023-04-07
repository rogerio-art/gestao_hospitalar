<?php include"./header.php";?>
<?php include"./sidebar.php";?>
<?php include"./config/db.php" ;?>


<?php

$query=mysqli_query($connection,"SELECT * FROM beneficiario WHERE id='".$_SESSION['id']."'")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);


function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>

   
   
      <!-- Main content -->
</br></br>
  <div class="content-wrapper">
<section class="content-header">
<h1>
Meus Benificiários
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="./actividades.php"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Gestão de Benificiário
</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Benificiários Activos</h3></br></br>

  &nbsp;&nbsp;&nbsp;&nbsp;<a href="./beneficiario.php"class="btn btn-primary bg-blue"  style="height: 35px;"><i class="fa fa-plus-circle"></i> Adicionar Benificiário</a><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <!--    <td>
    <button type="button" class="btn btn-default">Copy</button>
    </td> -->
   

<div class="box-body">
<table id="example1" class="table table-bordered table-hover">
 <thead>
<tr>
<!-- <th>Id</th> -->
<th>Nome do Benificiário</th>
<th>E-mail</th>
<th>Telefone</th>
<th>Morada</th>
<th>Idade</th>
<th>Género</th>
<!-- <th>Opção</th> -->
</tr>
</thead>
<tbody>
<?php
foreach ($row1 as $row)
{
  $sql1=" SELECT id, namebenif,email,telefone,endereco,idade,genero FROM beneficiario  WHERE id='".$_SESSION['id']."'";// comentei porque estava a dar erro ao apresentar o ecran no site o ecran aparece tudo escuro
  $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
 //print_r($sql); exit;
    $row1=mysqli_fetch_array($write1)or die (mysqli_error($connection));
//print_r($row1); exit;
   //echo "$description"; exit();
?> <tr>
  

<td><?php echo $row['namebenif'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['telefone'];?></td>
<td><?php echo $row['endereco'];?></td>
<td><?php echo $row['idade'];?></td>
<td><?php echo $row['genero'];?></td>
</tr>

</td> 



<?php }  ?>
  </tbody>
  
</table>
</br>
<a href="actividades.php"><span class="btn btn-primary bg-blue"><i class="fa fa-back"></i>Voltar</span><!--&nbsp;&nbsp;-->

    <!-- <button type="button" onclick="window.print();" class="btn btn-primary bg-blue">Imprimir</button> -->
 
       </div>
      </div>       
      </div>
    </section>
  </div>
 <?php include"./footer.php";?>
  

               
          