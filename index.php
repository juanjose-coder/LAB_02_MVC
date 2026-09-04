<?php
    require_once("config.php");
    require_once("controlador/ProductoController.php");
    require_once("controlador/ClienteController.php");

    $prodController   = new ProductoController();
    $clienteController = new ClienteController();

    if (isset($_GET['m'])) {
        $metodo = $_GET['m'];

        // Los métodos de clientes usan nombres propios (listarCliente, nuevoCliente,
        // guardarCliente, editarCliente, actualizarCliente, eliminarCliente),
        // así que primero se verifica si pertenecen al ClienteController.
        if (method_exists('ClienteController', $metodo)) {
            $clienteController->{$metodo}();
        }
        else if (method_exists('ProductoController', $metodo)) {
            $prodController->{$metodo}();
        }
        else {
            // Método no encontrado: mostrar el listado de productos por defecto
            $prodController->listar();
        }
    }
    else {
        // Pantalla inicial: listado de productos
        $prodController->listar();
    }
?>
