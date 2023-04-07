<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php

include("../inc/connect.php") ;


$query=mysqli_query($connection,"SELECT * FROM especialidade")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Especialidades Principais
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Especialidade Disponíveis</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <a href="criarespecialidade.php">
              <button type="submit" name="submit" class="btn bg-blue">Adicionar Especialidade</button></a><br>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!--    <td>
  <button type="button" class="btn btn-default">Copy</button>
</td> -->
<!-- <td>
<a href="./exceladdscervice.php"> <button type="button" class="btn btn-default">Excel</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="csvaddservice.php"><button type="button" class="btn btn-default">CSV</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="./PDF/addmainser_pdf.php"><button type="button" class="btn btn-default">PDF</button></a>
 </td>&nbsp;&nbsp;
<td>
    <td>
                    <button type="button" onclick="window.print();" class="btn btn-default">Imprimir</button>
                  </td> -->
            <div class="box-body">
<table id="example1" class="table table-bordered table-hover">
<thead>
 <tr>

  <th>Nome da Especialidade</th>
  <th>Preço</th>
  <th>Opção</th>
                  
</tr>
</thead>
<tbody>
<?php
     foreach ($row1 as $row)
      {

?> <tr>
 

<td><?php echo $row['Nome'];?></td>
<td><?php echo $row['Preco'];?></td>
<td><a href="editarespecialidade.php?id=<?php echo $row['Id'];?>"><span class="btn bg-blue"><i class="fa fa-edit"></i> Editar </span></a>
<!-- <a href="delete.php?id=<?php #echo $row['id'];?>"><span class="btn bg-blue"><i class="fa fa-trash-o"></i> Delete </span></a></td> -->
</tr>
<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
  </div>
<?php include "../Include/footer.php";?>
