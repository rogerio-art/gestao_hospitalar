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
        <?php  if(isset($_SESSION['username'])){
                           ?>

<img src="../Upload/Adminprofile/<?php echo $_SESSION['profile'];?>" height="100%" class="img-circle"  alt="User Image">
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
          <a href="../Index/index.php">
            <i class="fa fa-dashboard"></i> <span>Painel Principal</span>
         </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span> Gestão de Paciente</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Patient/patientlist.php"><i class="fa fa-user"></i>Paciente</a></li>
            <li><a href="../Patient/newprofile.php"><i class="fa fa-book"></i> Add Benificiário</a></li>
            <!--li><a href="../Patient/addnewpayment.php"><i class="fa fa-plus"></i> Novo Paciente</a></li-->
            <li><a href="../Patient/payments.php"><i class="fa fa-dollar"></i> Pagamento</a></li>
            <!--li><a href="../Patient/casehistory.php"><i class="fa fa-book"></i> Histórico</a></li-->

            <!--li><a href="../Patient/patientdetails.php"><i class="fa fa-wheelchair"></i> Pacientes<span class="popuptext" id="myPopup">Get full version at rogeriolameira2017@outlook.com</span--></a></li>
             <!--li><a href="../Patient/document.php"><i class="fa fa-file-text-o"></i> Documento</a></li-->
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
            <!--li><a href="../Appointment/addappointment.php"><i class="fa fa-plus"></i> Marcar Consulta</a></li-->
            
            <li><a href="../Appointment/today.php"><i class="fa fa-laptop"></i> Consultas Ativas</a></li>
            <li><a href="../Appointment/allappointment.php"><i class="fa fa-list"></i>Todas Consultas</a></li>
            <!--li><a href="../Appointment/appointment.php"><i class="fa fa-calendar"></i> Documento do Paciente</a></li-->
            <li><a href="../Appointment/upcomming.php"><i class="fa fa-calendar-plus-o"></i> Próxima Consulta</a></li>
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
            <li><a href="../internamento/patientIntern.php"><i class="fa fa-briefcase"></i> Pacientes Internado</a></li>
            <li><a href="../internamento/veralta.php"><i class="fa fa-briefcase"></i> Lista de Alta</a></li>
            <li><a href="../internamento/addpatInter.php"><i class="fa fa-briefcase"></i> Adicionar Paciente</a></li>
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
          <li><a href="../Justificativo/justify.php"><i class="fa fa-calendar"></i> Justificativos</a></li>
            <li><a href="../Justificativo/addnew.php"><i class="fa fa-calendar"></i> Criar</a></li>
          </ul>     
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Serviços</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Services/addservices.php"><i class="fa fa-briefcase"></i> Serviços Médicos</a></li>
            <li><a href="../Services/services.php"><i class="fa fa-briefcase"></i> Sub Serviços</a></li>
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
            <li><a href="../Exame/examelist.php"><i class="fa fa-plus-circle"></i> Exames</a></li>
            <li><a href="../Exame/addnewExa.php"><i class="fa fa-edit"></i> Criar Exame</a></li>
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
            <li><a href="../Prescription/addnew.php"><i class="fa fa-plus-circle"></i> Criar Prescrição</a></li>
            <li><a href="../Prescription/prescription.php"><i class="fa fa-edit"></i> Prescrição</a></li>
          </ul>     
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit"></i> <span>Medicamento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Medicine/addmedicine.php"><i class="fa fa-plus-circle"></i> Novo Medicamento</a></li>
            <li><a href="../Medicine/createmedicinecategory.php"><i class="fa fa-edit"></i>  Categoria do Medicamento</a></li>
            <li><a href="../Medicine/medicinelist.php"><i class="fa fa-medkit"></i>  Lista de Medicamento </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Médicos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../medico/listdotor.php"><i class="fa fa-plus-circle"></i> Lista dos Médicos</a></li>
            <li><a href="../medico/createdotor.php"><i class="fa fa-edit"></i>  Cadastrar Médicos</a></li>
            <!--li><a href="../medico/timedotor.php"><i class="fa fa-medkit"></i>  Disponibilidade dos Médicos </a></li-->
            <li><a href="../medico/especialidade.php"><i class="fa fa-medkit"></i>  Especialidade </a></li>
         
          </ul>
           </li>
       
        <li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Contacto</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="../Admin/recrutamento.php"><i class="fa fa-envelope"></i> <span> Recebido</span></a></li>
          <li><a href="../Admin/EnviadosContacto.php"><i class="fa fa-envelope"></i>  Enviado</a></li>
          </ul>
           </li>
       
        
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="../Patient/relatorioGeralPayment.php"><i class="fa fa-plus-circle"></i> Pagementos Gerais</a></li-->
            <li><a href="../Appointment/RelatorioConsult.php"><i class="fa fa-edit"></i> Consultas </a></li>
            <li><a href="../Admin/Relatorioestatisticas.php"><i class="fa fa-edit"></i>Estatísticas Gerais </a></li>
      
          </ul>  
             
        </li>

        <li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit"></i> <span>Perfil e Acesso</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="../Admin/index.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-plus-circle"></i> Meu Perfil</a></li>
          <li><a href="../Admin/acess.php"><i class="fa fa-edit"></i>  Criar Admin/Médico</a></li>
        
          </ul>
          <li>
        <a class="nav-link"  href="../mensagem/home/my_messages"><i class="fa fa-send"></i><span>Chat</span></a>
   
        </li>
        </ul>
        

        
    </section>
    <!-- /.sidebar -->
  </aside>