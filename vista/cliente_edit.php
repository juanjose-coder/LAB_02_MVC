<?php require("layout/header.php"); ?>
<h1>Actualizar Cliente</h1>
<hr>
<form action="">
    <?php foreach($dato as $value): ?>
    <?php foreach ($value as $v): ?>
    <label for="">Nombre</label><br>
    <input type="text" name="nomcliente" value="<?php echo $v['nomcliente']; ?>"><br>
    <label for="">Dirección</label><br>
    <input type="text" name="dircliente" value="<?php echo $v['dircliente']; ?>"><br>
    <label for="">RUC</label><br>
    <input type="text" name="ruccliente" value="<?php echo $v['ruccliente']; ?>"><br>
    <label for="">Teléfono</label><br>
    <input type="text" name="telcliente" value="<?php echo $v['telcliente']; ?>"><br>
    <input type="submit" name="enviar" value="Actualizar">
    <input type="hidden" name="id" value="<?php echo $v['id']; ?>">
    <input type="hidden" name="m" value="actualizarCliente">
    <?php endforeach; ?>
    <?php endforeach; ?>
</form>
<?php require("layout/footer.php"); ?>
