<?php
include('./config/db.php');

if (!empty($_POST["specilizationid"])) {
    $especialidade = mysqli_real_escape_string($connection, $_POST['specilizationid']);
    $sql = mysqli_query($connection, "SELECT nomemedico, id_medico FROM medicos WHERE especialidade='$especialidade'");
    ?>
    <option value="" disabled selected>Selecione o Médico</option>
    <?php
    if ($sql === false) {
        die(mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($sql)) {
        ?>
        <option value="<?php echo htmlentities($row['id_medico']); ?>"><?php echo htmlentities($row['nomemedico']); ?></option>
        <?php
    }
} else if (!empty($_POST["Price"])) {
    $especialidade = mysqli_real_escape_string($connection, $_POST['Price']);
    $sql = mysqli_query($connection, "SELECT Id, Preco FROM especialidade WHERE Nome='$especialidade'");
    ?>
    <option value="" disabled selected>Selecione o Preço</option>
    <?php
    if ($sql === false) {
        die(mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($sql)) {
        ?>
        <option value="<?php echo htmlentities($row['Preco']); ?>"><?php echo htmlentities($row['Preco']); ?></option>
        <?php
    }
}
?>
