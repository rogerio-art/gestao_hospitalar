<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
$query=mysqli_query($connection,"SELECT * FROM addfiles")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
//echo $row1; 
$p_query=mysqli_query($connection,"SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);

function mysql_fetch_all($query)

{
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
return $temp;
}
//print_r($row1); 
//print_r($p_row1);exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
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
die("Error uploading file! Code $error.");
}
else
{ 
if ($type=="images/" || $size > 5000000)
{
  die("that format is not allowed or file size is too big!");
}
else
{ //echo "string"; exit;
 move_uploaded_file($temp,"../Upload/File/".$name);//move upload file  
 // echo"Upload Complete";  
}
}


  $write ="INSERT INTO addfiles( `doc_date`,`patient`,`title`,`file`) VALUES (' $d1','$patient','$title','$name')"or die(mysqli_error($connection));
  //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
  //$numrows=mysql_num_rows($query)or die (mysql_error());
echo " <script>setTimeout(\"location.href='../Appointment/appointment.php';\",150);</script>";
}


?>

<div class="content-wrapper">
  <section class="content-header">
  <h1>
   Documento do Paciente
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="../Index2"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Paciente</li>
    <li class="active"> Documento</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Documento do Patiente</h3>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="height: 50px;"><i class="fa fa-plus-square"></i> Add New</button><br>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-blue" style="height: 60px">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"> Adicionar ficheros </h4>
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
               <label for="exampleInputPassword1">Título</label>
              <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="">
           </div>

              <td><b>Carregar Imagem</b></font>
              <input type="file" name="file" id="fileToUpload"></td>

            <div class="box-footer">
              <button type="submit"   name="submit" class="btn btn-primary">Submit</button>
             </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<a href="./excelapp.php"> <button type="button" class="btn btn-default">Excel</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="csvapp.php"><button type="button" class="btn btn-default">CSV</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="./PDF/app_pdf.php"><button type="button" class="btn btn-default">PDF</button></a>
</td>&nbsp;&nbsp;
<td>
<button type="button" onclick="window.print();" class="btn btn-default">Print</button>
</td>
<div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Date</th>
            <th>Patient</th>
            <th>Title</th>
            <th>Document</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody>
               <?php
   foreach ($row1 as $row)
    {
$s1=" SELECT name FROM patientregister WHERE id='".$row['patient']."'";
$w1 =mysqli_query($connection,$s1) or die(mysqli_error($connection));
//print_r($w1); exit;
$row2=mysqli_fetch_array($w1)or die (mysqli_error($connection));
 //print_r($row2); exit();
?> <tr>  
<td><?php echo $row['doc_date'];?></td>
<td><?php echo $row2['name'];?></td>
<td><?php echo $row['title'];?></td> 

<td><img src="../Upload/File/<?php echo $row['file'];?>" style="height:100px;width:100px;"/></td>
 
<td><a href="./download.php?file=<?php echo $row['file'];?>"><button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Download</button></a>&nbsp;
<a href="deletea.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</span></a></td>

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

