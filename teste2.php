<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Dinâmico</title>
    <link rel="stylesheet" href="teste.css">
</head>
<body>
<div class="container">
        <h2>Selecione um Item:</h2>
        <form id="addItemForm">
            <select id="dropdown">
            <option value=<?php include 'dropdown.php';?>
            </select>
            <input type="button" value="Adicionar" onclick="addSelectedItem()">
        </form>
        
        <div style="display: flex; justify-content: space-between;">
            <div style="flex: 1;">
                <h2>Itens Selecionados:</h2>
                <ul id="selected-items-list">
                    <!-- Os itens selecionados serão exibidos aqui -->
                </ul>
            </div>
            
            <div style="flex: 1;">
                <h2>Itens Adicionados:</h2>
                <ul id="added-items-list">
                    <!-- Os itens adicionados serão exibidos aqui -->
                </ul>
            </div>
        </div>

        <h2>Total:</h2>
        <p id="total-value">0</p>
    </div>

    <script type="text/javascript">
        function addSelectedItem() {
            // Obter o valor selecionado na dropdown
            var dropdown = document.getElementById("dropdown");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;

            // Obter o texto (mainservicename) selecionado na dropdown
            var selectedText = dropdown.options[dropdown.selectedIndex].text;

            // Verificar se o item já foi selecionado antes de adicioná-lo à lista
            if (!isItemAlreadySelected(selectedValue)) {
                // Criar um novo item de lista para a lista de itens selecionados
                var selectedListItem = document.createElement("li");
                selectedListItem.textContent = selectedText; // Usar o texto ao invés do valor

                // Adicionar o item à lista de itens selecionados
                var selectedItemsList = document.getElementById("selected-items-list");
                selectedItemsList.appendChild(selectedListItem);

                // Criar um novo item de lista para a lista de itens adicionados
                var addedListItem = document.createElement("li");
                addedListItem.textContent = selectedValue; // Usar o texto ao invés do valor
                addedListItem.setAttribute("data-price", selectedValue); // Adicionar atributo com o preço
                
                //addedListItem.textContent = selectedValue; // Usar o valor ao invés do texto
                //addedListItem.setAttribute("data-price", selectedValue); // Atualizar o atributo com o preço

                // Adicionar o item à lista de itens adicionados
                var addedItemsList = document.getElementById("added-items-list");
                addedItemsList.appendChild(addedListItem);

                // Atualizar o total
                updateTotal();
            }
        }

        function isItemAlreadySelected(itemValue) {
            // Verificar se o item já está na lista de itens selecionados
            var selectedItemsList = document.getElementById("selected-items-list");
            var items = selectedItemsList.getElementsByTagName("li");

            for (var i = 0; i < items.length; i++) {
                if (items[i].textContent === itemValue) {
                    alert("Item já selecionado!");
                    return true;
                }
            }
            return false;
        }

        function updateTotal() {
            // Calcular o total dos valores na lista de itens adicionados
            var addedItemsList = document.getElementById("added-items-list");
            var items = addedItemsList.getElementsByTagName("li");
            var total = 0;

            for (var i = 0; i < items.length; i++) {
                // Usar o valor do atributo data-price para obter o preço
                total += parseFloat(items[i].getAttribute("data-price"));
            }

            // Exibir o total no elemento HTML
            var totalElement = document.getElementById("total-value");
            totalElement.textContent = total;
        }
    </script>
</body>
</html>
