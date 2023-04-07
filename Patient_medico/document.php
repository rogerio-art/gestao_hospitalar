<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
$query=mysqli_query($connection, "SELECT * FROM addfiles")or die (mysqli_error($connection));
$numrows=mysqlI_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
//echo $row1; 
$p_query=mysqli_query($connection, "SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqlI_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);

function mysql_fetch_all($query)

{
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
return $temp;
}
//print_r($row1); 
//print_r($p_row1);exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysqli_error());
?>
<?php
//session_start();
if(isset($_POST['submit']))
{ 
  $d1=date('Y-m-d');
$patient=$_POST['patient'];

$title=$_POST['title'];

$target_dir="../Upload/File/";
$name=$_FILES["file"]["name"];
$type = $_FILES["file"]["type"];
$size = $_FILES["file"]["size"];

$temp = $_FILES["file"]["tmp_name"]; 
$error = $_FILES["file"]["error"];//size
if($error>0)
{
die("Erro ao Carregar o fichero! Códico de erro $error.");
}
else
{ 
if ($type=="images/" || $size > 5000000)
{
  die("O formato do seu fichero não é suportado é demasiado grande!");
}
else
{ //echo "string"; exit;
 move_uploaded_file($temp,"../Upload/File/".$name);//move upload file  
 // echo"Upload Complete";  
}
}
//print_r($_FILES); exit();

  $write =mysqli_query($connection,"INSERT INTO addfiles( `doc_date`,`patient`,`title`,`file`) VALUES (' $d1','$patient','$title','$name')") or die(mysqli_error($connection));
  //$query=mysqli_query($connection, "SELECT * FROM user ")or die (mysqli_error());
  //$numrows=mysqlI_num_rows($query)or die (mysqli_error());
 // echo " <script>alert('Records Successfully Inserted..');</script>";
}


?>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="../css7/style.css" type="text/css">

<div class="content-wrapper">
  <section class="content-header">
  <h1>
 Documento do Paciente
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Paciente</li>
    <li class="active"> Documento</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title"> Documento do Paciente</h3>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="height: 50px;"><i class="fa fa-upload"></i> Carregar Documento</button><br>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-blue" style="height: 60px">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"> Carregar Documento</h4>
      </div>
  <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
           <div class="form-group">
             <label for="exampleInputPassword1">Paciente</label>
             <select name="patient" class="form-control" id="exampleInputPassword1" placeholder="">
 
<?php foreach ($p_row1 as $s) {?>
<option value="<?php echo $s['id'];?>"><?php echo $s['name'];?></option>
                <?php } ?>
              </select>
            </div>

           <div class="form-group">
               <label for="exampleInputPassword1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="">
           </div>

              <td><b>Carregar Imagem</b></font>
              <input class="form-control" type="file" name="file" id="fileToUpload"></td>

            <div class="box-footer">
              <button type="submit" onclick="myfunction()"  name="submit" class="btn btn-primary">Ok</button>
             </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
          </div>
          </form>
      </div>
    </div>
</div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->

<td>
<button type="button" onclick="window.print();" class="btn btn-default">Imprimir</button>
</td>
<div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Data</th>
            <th>Paciente</th>
            <th>Título</th>
            <th>Documento</th>
            <th>Opções</th>
            </tr>
            </thead>
            <tbody>
               <?php
   foreach ($row1 as $row)
    {
$s1=mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['patient']."'");
$w1 =mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['patient']."'") ;//or die(mysqli_error($connection));
//print_r($w1); exit;
$row2=mysqli_fetch_array($w1);//or die (mysqli_error($connection));
 //print_r($row2); exit();
?> <tr>  
<td><?php echo $row['doc_date'];?></td>
<td><?php echo $row2['name'];?></td>
<td><?php echo $row['title'];?></td> 

<td><img src="../Upload/File/<?php echo $row['file'];?>" style="height:100px;width:100px;" alt="<?php echo pathinfo($row['file'], PATHINFO_FILENAME) ?>"/></td>
 
<td><a href="./download.php?file=<?php echo $row['file'];?>"><button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Download</button></a>&nbsp;
<a href="deleted.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i> Apagar</span></a></td>

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
