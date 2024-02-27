<?php
$value = "Sala de Parto,Análises Clínicas";

// Dividir a string usando a vírgula como delimitador
$array_valores = explode(",", $value);

// Inicializar uma nova variável para armazenar os valores separados por quebra de linha
$nova_variavel = implode("\n", array_map('trim', $array_valores));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição PHP</title>
</head>
<body>

<h1>Valor da nova variável:</h1>
<pre><?php echo $nova_variavel; ?></pre>

</body>
</html>
