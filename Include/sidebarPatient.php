<?php

//echo "string"; exit;
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <?php
// $sql="SELECT * FROM login";
//     $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
//      $row2=mysqli_fetch_array($write)or die (mysqli_error($connection));
//      //print_r($row2?>
          <img src="../../dashboard/Upload/Adminprofile/<?php echo $row2['profile'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php// echo $row2['fname'];?>&nbsp;
           <?php// echo $row2['lname'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Área de Navegação</li>
        <li>
        
          <a class="active" href="./index.php"><i class="fa fa-eye"></i> Visão Geral</a>
      <a href="./marcarconsulta.php"><i class="fa fa-calendar-plus"></i> Marcar Online</a>
      <a href="./especialidade.php"><i class="fa fa-list"></i> Especialidades</a>
      <a href="./contacto.php"><i class="fa fa-envelope"></i> Fala Connosco</a>
      <a href="./about.php"><i class="fa fa-info"></i> Sobre nós</a>
      <a href="./index2.php"><i class="fa fa-lock"></i> Admin Login</a>
      <a href="./loginMedico.php"><i class="fa fa-user"></i> Médico Login</a>
    
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>