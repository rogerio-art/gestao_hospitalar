<?php include"./header.php";?>
<?php include"./sidebar.php";?>  
<?php 
  include("./inc/connect.php") ;
  
    //session_start();

    
  $sql="SELECT * FROM addappointment WHERE id='".$_GET['id']."'";
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $estado=$row     ['estado'];

   
    //echo $row['date  ']; exit();
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();




   
      $write =mysqli_query($connection,"UPDATE addappointment SET estado='2' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>setTimeout(\"location.href='./atividadeConsulta.php';\",150);</script>";

   

?>
<?php

$p_query=mysqli_query($connection,"SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);


function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
?>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  
            </div>
       
     

                <?php
     
                echo " <script>alert('A sua Consulta foi cancelada Com sucesso...');</script>";
                ?>
    <meta http-equiv="refresh" content="0;url=atividadeConsulta.php" />
   
          </div>
      </form>
    </div>
  </div>
</div>
</section>
</div>