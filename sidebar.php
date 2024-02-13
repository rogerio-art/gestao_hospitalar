<?php

   // include('config/db.php');
    ?>
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
        <li class="header"> <a class="nav-link"  href="./actividades.php"><i class="fa fa-home"></i> Painel Principal</a></li>
     
        <li>
          
          <a class="nav-link"   href="./actividades.php"><i class="fa fa-dashboard"></i> <span> Área do Usuário </span></a>
         
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

        <li class="treeview">
          <a href="#">
            <i class="fa fa-phone"></i> <span> Contacto</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          <li><a href="./cTodosontactos.php"><i class="fa fa-phone"></i> Todos Contactos</a></li>
          <li><a href="./contactosRecebido.php"><i class="fa fa-phone"></i> Entrada</a></li>
          <li><a href="./contactosEnviados.php"><i class="fa fa-phone"></i> Enviado</a></li>
          <li><a class="nav-link"  href="./recrutamentoLoged.php"><i class="fa fa-send"></i><span> Candidatura/Contacto</span></a></li>
         </ul>
        </li>

        <li>
        <a class="nav-link"  href="./mensagem/home/my_messages"><i class="fa fa-send"></i><span>Chat</span></a>
   
       
        <li>
        <!--a class="nav-link"  href="./about.php"><i class="fa fa-info"></i><span> Sobre nós </span></a-->
</li>
<li>
        <a class="nav-link"  href="./exameElectronic.php"><i class="fa fa-send"></i><span>Prova Eletrónica</span></a>
   
   </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>
