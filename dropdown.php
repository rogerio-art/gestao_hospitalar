<?php
// Substitua as informações do banco de dados pelos seus próprios dados de conexão
include("./inc/connect.php") ;

// Verifica a conexão

// Consulta para obter os itens da tabela no banco de dados
$sql = "SELECT preco, mainservicename FROM mainservices";
$result = $connection->query($sql);

// Dropdown para seleção de itens
echo '<select name="item" id="item">';
while ($row = $result->fetch_assoc()) {
    echo '<option value="' . $row['preco'] . '">'. $row['mainservicename'] . '</option>';
}
echo '</select>';

// Fechar a conexão com o banco de dados
$connection->close();
?>
