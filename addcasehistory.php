<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))

{//print_r($_POST['description']); exit();
 //print_r($_POST); exit();
//echo "string"; exit();
    $date=$_POST['date'];
    $patient=$_POST['patient'];
    $description=$_POST['description'];
   $write =mysqli_query($connection,"INSERT INTO addmedicalhistory(`date`,`patient`,`description`) VALUES ('$date','$patient','$description')") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
    echo " <script>setTimeout(\"location.href='../Patient/casehistory.php';\",150);</script>";
    }
      

?>
<?php
//include("../inc/connect.php") ;
$query=mysqli_query($connection,"SELECT * FROM addmedicalhistory")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);

$p_query=mysqli_query($connection,"SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);




function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Historico 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"> Historico</li>
      </ol>
    </section>
      <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-book"></i> <h3 class="box-title"> Historico</h3>
      </div>
  
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Histórico do Paciente</h3>
            </div>
              <div class="modal-body">
               <form method="POST" >
                  <label >Data</label>
                  <input type="date" name="date" style="width:100%;" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo date('Y-m-d');  ?>"><br>
                   <label >Paciente</label><br>
                  <select name="patient" class="form-control select2" style="width:100%;" placeholder="">
                  <?php foreach ($p_row1 as $p) 
                  
                  {?>
                   <option value="<?php echo $p['id'];?>"><?php echo $p['name'];?></option>
                   
                  <?php } ?>
                  <?php

$p_query="SELECT * FROM beneficiario ";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo "Escolher";?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['namebenif'];?>

</option>  
 
<?php } ?> 
                   



                </select><br>   <br>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descrição</label>
                  <textarea id="editor1" name="description" style="width:100%;" class="form-control">
                  </textarea>
                  </div>
                </div>
                   <button type="submit"  name="submit" class="btn btn-primary">Salvar</button>
                   <a href="casehistory.php" class="btn btn-primary">Voltar</a>
                   </div>
                   </div>
                   </section>
           </div>
        </div>
       <bu

</div>
<?php include "../Include/footer.php";?>
<script>
  $(function () { 
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  </script>
  <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>