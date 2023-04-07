
<?php include('./header_admin.php'); ?>
<?php include('./config/db.php'); ?>

<!DOCTYPE HTML>
<html>
<?php require_once('./vendor/autoload.php'); ?>
<head> 

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>paginaprincipal</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
  <!-- The sidebar -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        body {
          margin: 0;
          font-family: "Lato", sans-serif;
        }
        
        .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        }
        
        .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
        }
         
        .sidebar a.active {
          background-color: #04AA6D;
          color: white;
        }
        
        .sidebar a:hover:not(.active) {
          background-color: brown;
          color: white;
        }
        
        div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
        }
        
        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }
        
        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }
        </style>
        
   
        <body>
        <div class="sidebar">
            
        <a class="active" href="http://localhost/gestaohospitalar/paginaprincipal_admin.php">Início</a>
        <a href="http://localhost/gestaohospitalar/verpaciente.php">Paciente</a> 
        <a href="http://localhost/gestaohospitalar/verconsulta.php"> Consultas</a>
          <a href="http://localhost/gestaohospitalar/vermedico.php">Médicos</a>
           <a href="http://localhost/gestaohospitalar/perfil_admin.php">Sair</a>
        </div>
       
        <!-- Page content -->    
        <div class="content">
        <div class="clearfix">
          
        <div class="container">
  <div class="row">
    <div class="col-12">
    <h3><font color="bronw">Pacientes Activos</font></h3>
    <p align="right"><input type="text" id="txtpesquisar" onkeyup="myFunction()"  placeholder="Pesquisar nome..."></p>
      <table id="myTable" class="table caption-top table-sm table-hover table-bordered border-primary ">
      
   
      
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data</th>
            <th scope="col">Opções</th>
          </tr>
        </thead>
        <tbody>
          
        
          <?php $sql= "SELECT  	id ,	primeironome,email,		numerodetelefone,data_hora,imagem from usuario ORDER BY id DESC";
  $result = $connection-> query($sql);
  if($result ->num_rows >0){
      while ($row= $result-> fetch_assoc())
      
      {
       
        
      echo "<tr><th>". $row["id"] . "<th>".$row["primeironome"]. "<th>".$row["email"]. "<th>".$row["numerodetelefone"].
      " <th>".$row["data_hora"]." <th>".$row["imagem"];
      
      }
      echo "</table>";
  }
  else
  {
    echo "0 Resultado";

  }
$connection->close();

  ?>
   <td>
           </td>
        </tbody>

    

        <tfoot>
    <tr>
      <th>Nome 
      </th>
      <th>dos
      </th>
      <th>pacientes
      </th>
      <th>ativos
      </th>
      <th>no
      </th>
      <th>sistema.
      </th>
    </tr>
  </tfoot>

  <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="http://localhost/gestaohospitalar/dashboard.php">Próximo</a>
    </li>
  </ul>
</nav>
  
 
      </table>
    </div>
  </div>
</div>

        
        </div>
        
          <!-- fim da página contente -->
          </div>
        


   



</body>
</html>

<?php include('./rodape.php'); ?>