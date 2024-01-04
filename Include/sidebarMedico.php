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
        <?php  if(isset($_SESSION['username'])){?>
                           

<img src="../Upload/Adminprofile/<?php echo $_SESSION['profile'];?>"  class="img-circle"  alt="User Image">
           </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fname'];?>&nbsp;
           <?php echo $_SESSION['lname'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          <?php  } ?>
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
          <a href="../Index2/index.php">
            <i class="fa fa-dashboard"></i> <span>Painel Principal</span>
         </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-bed"></i> <span> Gestão de Paciente</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Patient_medico/patientlist.php"><i class="fa fa-user"></i>Paciente</a></li>
            <!--li><a href="../Patient/addnewpayment.php"><i class="fa fa-plus"></i> Novo Paciente</a></li-->
            <li><a href="../Patient_medico/payments.php"><i class="fa fa-dollar"></i> Pagamento</a></li>
            <li><a href="../Patient_medico/casehistory.php"><i class="fa fa-book"></i> Histórico</a></li>
            <!--li><a href="../Patient/patientdetails.php"><i class="fa fa-wheelchair"></i> Pacientes<span class="popuptext" id="myPopup">Get full version at rogeriolameira2017@outlook.com</span--></a></li>
             <!-- <li><a href="../Patient/document.php"><i class="fa fa-file-text-o"></i> Documento</a></li> -->
           </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Gestão de Consulta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="../Appointment_medico/addappointment.php"><i class="fa fa-plus"></i> Marcar Consulta</a></li-->
            <li><a href="../Appointment_medico/allappointment.php"><i class="fa fa-list"></i> Consultas</a></li>
            <!--li><a href="../Appointment_medico/appointment.php"><i class="fa fa-calendar"></i> Documento do Paciente</a></li-->
            <li><a href="../Appointment_medico/today.php"><i class="fa fa-laptop"></i> Consultas de hoje</a></li>
            <li><a href="../Appointment_medico/upcomming.php"><i class="fa fa-calendar-plus-o"></i> Próxima Consulta</a></li>
           </ul>
        </li>
   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bed"></i> <span>Sala de internamento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../internamento_medico/patientIntern.php"><i class="fa fa-briefcase"></i> Pacientes Internado</a></li>
            <li><a href="../internamento_medico/veralta.php"><i class="fa fa-briefcase"></i> Lista de Alta</a></li>
            <li><a href="../internamento_medico/addpatInter.php"><i class="fa fa-briefcase"></i> Adicionar Paciente</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Exame</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Exame_medico/examelist.php"><i class="fa fa-plus-circle"></i> Exames</a></li>
            <li><a href="../Exame_medico/addnewExa.php"><i class="fa fa-edit"></i> Criar Exame</a></li>
          </ul>     
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Prescrição</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Prescription_medico/addnew.php"><i class="fa fa-plus-circle"></i> Criar Prescrição</a></li>
            <li><a href="../Prescription_medico/prescription.php"><i class="fa fa-edit"></i> Prescrição</a></li>
          </ul>     
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Justificativo Médico</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="../Justificativo_medico/justify.php"><i class="fa fa-calendar"></i> Justificativos</a></li>
            <li><a href="../Justificativo_medico/addnew.php"><i class="fa fa-calendar"></i> Criar</a></li>
          </ul>     
        </li>

           <li>
          <a href="../profile_medico/index.php">
            <i class="fa fa-user"></i> <span>Perfil</span>
         </a>
        </li>
        <li>
        <a class="nav-link"  href="../mensagem/home/my_messages"><i class="fa fa-send"></i><span>Chat</span></a>
   
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>