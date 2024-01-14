<?php
  session_start();    

  if (empty($_SESSION['email'])) {
      header("location: ./Validar_user_logado.php");
      exit();
  }
      ?>
<?php include"header.php";?>
<?php include"sidebar.php";?>

<?php
$query="SELECT * FROM justify  WHERE  id_patient='".$_SESSION['id']."'";
$query=mysqli_query($connection,$query)or die (mysqli_error($connection));
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

<br><br>
<div class="content-wrapper">
<section class="content-header">
<h1>
Meus Justificativos
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="./actividades.php"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Gestão de Justificativos
</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Justificativos Activos</h3>

</br></br>

  &nbsp;&nbsp;&nbsp;&nbsp;<a href="./recrutamentoLoged.php"class="btn btn-primary bg-blue"  style="height: 35px;"><i class="fa fa-plus-circle"></i> Solicitar Justificativo</a><!-- </a> --><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <!--    <td>
    <button type="button" class="btn btn-default">Copy</button>
    </td> -->
   

<div class="box-body">
<table id="example1" class="table table-bordered table-hover">
 <thead>
<tr>
<!-- <th>Id</th> -->
<th>Data</th>
<th>Nome</th>
<th>Título</th>
<th>Descrição</th>

<th>Opção</th> 
</tr>
</thead>
<tbody>
<?php
foreach ($row1 as $row)
{
  $sql1=" SELECT date, patient,titulo,descriacao FROM justify  WHERE id_patient='".$_SESSION['id']."'";// comentei porque estava a dar erro ao apresentar o ecran no site o ecran aparece tudo escuro
  $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
 //print_r($sql); exit;
    $row1=mysqli_fetch_array($write1)or die (mysqli_error($connection));
//print_r($row1); exit;
   //echo "$description"; exit();
?> <tr>
  

<td><?php echo $row['date'];?></td>
<td><?php echo $row['patient'];?></td>
<td><?php echo $row['titulo'];?></td>
<td><?php echo $row['descriacao'];?></td>


<td><a href="viewjustify.php?id=<?php echo $row['id']; ?>"> <span class="btn bg-blue "><i class="fa fa-eye"> Ver</i> </span> </a>

</td>
</tr>


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
  

               
          