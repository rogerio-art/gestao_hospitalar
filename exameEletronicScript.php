<?php
include('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['score'])) {
        $score = $_POST['score'];
        $iduser = ($_SESSION ['id']);
        $nome = ($_SESSION ['name']);

    }
        if ($score > 2){
            $resultado ="Apto";
            } else{
            $resultado ="Não Apto";
            }
            $sql = "INSERT INTO exameeletronico (iduser, nome, pontuacao, resultado, Descricao, data)
            VALUES ('$iduser', '$nome', '$score', '$resultado', 'exame', now())";
           
           $sqlQuery = mysqli_query($connection, $sql);
          
           header("Location: ./actividades.php");
        } 
        
        ?>   
