<?php
include("./inc/connect.php") ;
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo 'item' está definido
    if (isset($_POST['item'])) {
        // Obtém os itens selecionados
        $selectedItems = $_POST['item'];

        // Verifica se $selectedItems é um array antes de iterar sobre ele
        if (is_array($selectedItems)) {
            // Exibe os itens selecionados
            echo '<h3>Itens Adicionados:</h3>';
            echo '<ul>';
            foreach ($selectedItems as $item) {
                // Aqui, você pode realizar ações adicionais, como inserir os itens em outra tabela no banco de dados
                echo '<li>' . $item . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Nenhum item selecionado.</p>';
        }
    }
}
?>
