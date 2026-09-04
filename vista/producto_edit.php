<?php require("layout/header.php"); ?>
<h1>Actualizar Producto</h1>
<hr>
<form action="">
    <?php foreach($dato as $value ): ?>
    <?php foreach ($value as $v): ?>
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" value="<?php echo $v['nombre']; ?>"><br>
    <label for="">Precio</label><br>
    <input type="text" name="precio" value="<?php echo $v['precio']; ?>"><br>
    <input type="submit" name="enviar" value="Actualizar">
    <input type="hidden" name="id" value="<?php echo $v['id']; ?>">
    <input type="hidden" name="m" value="update">
    <?php endforeach; ?>
    <?php endforeach; ?>
</form>
<?php require("layout/footer.php"); ?>
