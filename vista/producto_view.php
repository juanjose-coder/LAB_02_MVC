<?php require("layout/header.php"); ?>
<a href="index.php?m=nuevo">Nuevo Producto</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Acciones</td>
    </tr>
    <?php
    foreach ($dato as $key => $value)
        foreach ($value as $va){
            echo "<tr><td>".$va['id']."</td><td>".$va['nombre']."</td><td>".$va['precio']."</td>";
            echo "<td><a href='index.php?m=editar&id=".$va['id']."'>Actualizar</a>
            <a href='index.php?m=eliminar&id=".$va['id']."'>Eliminar</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<?php require("layout/footer.php"); ?>
