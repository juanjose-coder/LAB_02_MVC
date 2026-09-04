<?php require("layout/header.php"); ?>
<h1>Nuevo Producto</h1>
<hr>
<form action="">
    <label for="">Nombre</label><br>
    <input type="text" name="nombre"><br>
    <label for="">Precio</label><br>
    <input type="text" name="precio"><br>
    <input type="submit" name="enviar">
    <input type="hidden" name="m" value="guardar">
</form>
<?php require("layout/footer.php"); ?>
