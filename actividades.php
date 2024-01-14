<?php
session_start();

if (empty($_SESSION['id'])) {
    header("location: ./Validar_user_logado.php");

}
    ?>


<?php include('config/db.php'); ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        </head>
    <!-- The sidebar -->
  </body>
    
        <!-- Page contentfaz a pagina se ajustar dentro do header e do sidbar-->
        <div class="content-wrapper">
        <section class="content-header">
      <h1>
      <font color="black">Minhas Actividades</font>  
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="./index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
       <li class="active">Minhas Actividades</li>
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">
         <i class=""></i>
        
          </div>
     
      <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
           <?php 
                 $sql="SELECT count(id) FROM  addnewpres WHERE id_patient='".$_SESSION['id']."'";
                            
                $write =mysqli_query($connection, $sql) or die(mysqli_error($connection));
                  $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Minhas Prescrições</p>
            </div>
            <div class="icon">
              <i class="fa fa-wheelchair"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                           <a href="#" class="small-box-footer"> Sem dados Para mostrar <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="./PrescAtivi.php" class="small-box-footer"> Clica pra ver  <i class="fa fa-arrow-circle-right"></i></a>
      
                           <?php
                           }
                           ?>
           </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php 
                $sql="SELECT count(id) FROM  addappointment WHERE patient='".$_SESSION['id']."'";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Minhas Consultas</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                           <a href="marcarconsulta.php" class="small-box-footer"> Marcar agora <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="./atividadeConsulta.php" class="small-box-footer"> Clica para ver  <i class="fa fa-arrow-circle-right"></i></a>
    
                           <?php
                           }
                           ?>
                </div>
        </div>
        <!-- ./col -->
         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
                   <?php 
                $sql="SELECT count(*) FROM addpayment WHERE patient='".$_SESSION['id']."'";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Meus Pagamentos</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                           <a href="#" class="small-box-footer"> Sem dados Para mostrar <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="paymenthistory.php?id=<?php echo $_SESSION['id'];?>" class="small-box-footer"> Clica pra ver  <i class="fa fa-arrow-circle-right"></i></a>
         
                           <?php
                           }
                           ?>

           </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                   <?php 
                             $sql="SELECT count(*) FROM  addmedicalhistory WHERE patient='".$_SESSION['id']."'";
                  
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Histórico de Saude </p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil-square-o"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                           <a href="#" class="small-box-footer">Sem dados para Mostrar<i class="fa fa-arrow-circle-right"></i></a>
         
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="#" class="small-box-footer">Clica pra ver <i class="fa fa-arrow-circle-right"></i></a>
         
                           <?php
                           }
                           ?>
            
           </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                   <?php 
                             $sql="SELECT count(*) FROM  beneficiario WHERE id='".$_SESSION['id']."'";
                  
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Gerir Beneficiário </p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                           <a href="beneficiario.php" class="small-box-footer"> Clica para Adicionar Novo <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="./beneficiario_list.php" class="small-box-footer">Clica pra ver <i class="fa fa-arrow-circle-right"></i></a>
         
                           <?php
                           }
                           ?>

            
           </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                   <?php 
                             $sql="SELECT count(*) FROM  justify WHERE id_patient='".$_SESSION['id']."'";
                  
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p> Justificativos</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus-square"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                         
                           <a href="#" class="small-box-footer"> Sem dados para mostrar <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="./justificativo.php" class="small-box-footer">Clica pra ver <i class="fa fa-arrow-circle-right"></i></a>
         
                           <?php
                           }
                           ?>

            
           </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
                   <?php 
                             $sql="SELECT count(*) FROM  contacto WHERE userID='".$_SESSION['id']."'";
                  
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p> Contacto</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <?php  if($row[0]<1){
                           ?>
                           
                         
                           <a href="#" class="small-box-footer"> Sem dados para mostrar <i class="fa fa-arrow-circle-right"></i></a>
                        
                         
                         <?php
                           }else{
                            ?>
                          
                          <a href="./contactosEnviados.php" class="small-box-footer">Clica pra ver <i class="fa fa-arrow-circle-right"></i></a>
         
                           <?php
                           }
                           ?>

            
           </div>
        </div>
        <!-- ./col -->
       
   
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
    
   
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
    
      </div>
    </section>
    <?php include('footer.php');?>
    <!-- /.content -->
  </div>    
   </body>

        </html>


