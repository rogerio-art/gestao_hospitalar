

<!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
           <?php
$sql="SELECT * FROM patientregister";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row2=mysqli_fetch_array($write)or die (mysqli_error($connection));
     //print_r($row2?>
     
          <img src="./Upload/Adminprofile/Logotipo Clinica Saude.png" class="img-circle" alt="Clinica saude logo">
        </div>
        <div class="pull-left info">
        <?php 
                    if(empty($_SESSION ['name'])){$_SESSION = [];}else
                    echo' '. ($_SESSION ['name']); ?></br></br>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div></br></br>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar..">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> <a class="nav-link"  href="./pacient.php"><i class="fa fa-home"></i> Painel Principal</a></li>
     
        <li>
          
          <a class="nav-link"   href="./actividades.php"><i class="fa fa-dashboard"></i> <span> Área do Paciente </span></a>
         
        </li>
        <li>
          
          <a class="nav-link"  href="./marcarconsulta.php"><i class="fa fa-calendar"></i><span> Agendar Online </span></a>
         
        </li>

       

        <li>
        <a class="nav-link"  href="./medicosFree.php"><i class="fa fa-user"></i><span> Corpo clínico </span></a>
     
        </li>

        <!-- <li>
        <a class="nav-link"  href="./admin.php"><i class="fa fa-lock"></i><span> Admin Login</span></a>
     
        </li>
         -->


        <!-- <li>
        <a class="nav-link"  href="./Medico.php"><i class="fa fa-user"></i><span> Médico Login</span></a>
        </li> -->


      
           <li>
        <a class="nav-link"  href="./recrutamentoLoged.php"><i class="fa fa-phone"></i><span>Candidatura/Contacto</span></a>
   
        </li>

        <!--li>
        <a class="nav-link"  href="./mensagem"><i class="fa fa-send"></i><span>Chat</span></a>
   
        </li-->

        
        <li>
        <!--a class="nav-link"  href="./about.php"><i class="fa fa-info"></i><span> Sobre nós </span></a>
     
        </li-->
    </section>
    <!-- /.sidebar -->
  </aside>
