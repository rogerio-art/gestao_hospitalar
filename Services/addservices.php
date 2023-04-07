<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php

include("../inc/connect.php") ;


$query=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php
include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{//print_r($_POST); exit();
    $id=$_POST['id'];
    $mainservicename=$_POST['mainservicename'];
    
 $write =mysqli_query($connection,"INSERT INTO mainservices(`mainservicename`) VALUES ('$mainservicename')") or die(mysqli_error($connection));

   // echo "<script>alert('Records Successfully Inserted..');</script>";
      echo " <script>setTimeout(\"location.href='../Services/addservices.php';\",150);</script>";
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Serviços Principais
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> serviços Principais</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <a href="mainservices.php">
              <button type="submit" name="submit" class="btn btn-primary">Adicionar Novo</button></a><br>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!--    <td>
  <button type="button" class="btn btn-default">Copy</button>
</td> -->

            <div class="box-body">
<table id="example1" class="table table-bordered table-hover">
<thead>
 <tr>

  <th>Nome do Serviços </th>
  <th>Preço</th>
 
  <th>Opção</th>
                  
</tr>
</thead>
<tbody>
<?php
     foreach ($row1 as $row)
      {

?> <tr>
 
<td><?php echo $row['mainservicename'];?></td>
<td><?php echo number_format( $row['preco'], 2);?></td>
<td><a href="editmainservices.php?id=<?php echo $row['id'];?>"><span class="btn btn-success bg-green"><i class="fa fa-edit"></i> Edit </span></a>
<a href="delete.php?id=<?php echo $row['id'];?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete </span></a></td>
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
