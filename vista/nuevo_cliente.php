<?php require("layout/header.php"); ?>
<h1>Nuevo Cliente</h1>
<hr>
<form action="">
    <label for="">Nombre</label><br>
    <input type="text" name="nomcliente"><br>
    <label for="">Dirección</label><br>
    <input type="text" name="dircliente"><br>
    <label for="">RUC</label><br>
    <input type="text" name="ruccliente"><br>
    <label for="">Teléfono</label><br>
    <input type="text" name="telcliente"><br>
    <input type="submit" name="enviar" value="Guardar">
    <input type="hidden" name="m" value="guardarCliente">
</form>
<?php require("layout/footer.php"); ?>
