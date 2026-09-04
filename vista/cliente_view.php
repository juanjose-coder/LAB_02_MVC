<?php require("layout/header.php"); ?>
<a href="index.php?m=nuevoCliente">Nuevo Cliente</a>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Dirección</td>
        <td>RUC</td>
        <td>Teléfono</td>
        <td>Acciones</td>
    </tr>
    <?php
    foreach ($dato as $key => $value)
        foreach ($value as $v){
            echo "<tr><td>".$v['id']."</td><td>".$v['nomcliente']."</td><td>".$v['dircliente']."</td><td>".$v['ruccliente']."</td><td>".$v['telcliente']."</td>";
            echo "<td><a href='index.php?m=editarCliente&id=".$v['id']."'>Actualizar</a>
            <a href='index.php?m=eliminarCliente&id=".$v['id']."'>Eliminar</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<?php require("layout/footer.php"); ?>
