<?php
require_once("modelo/Cliente.php");
class ClienteController{
    private $modelo;

    function __construct(){
        $this->modelo = new Cliente();
    }
    // Mostrar clientes
    public function listarCliente(){
        $cliente = new Cliente();
        $dato = $cliente->listado();
        require_once("vista/cliente_view.php");
    }
    // Insertar cliente: mostrar formulario
    public function nuevoCliente(){
        require_once("vista/nuevo_cliente.php");
    }
    // Insertar cliente: guardar en BD
    public function guardarCliente(){
        $nomcliente  = $_REQUEST['nomcliente'];
        $dircliente  = $_REQUEST['dircliente'];
        $ruccliente  = $_REQUEST['ruccliente'];
        $telcliente  = $_REQUEST['telcliente'];
        $data = "'".$nomcliente."','".$dircliente."','".$ruccliente."','".$telcliente."'";
        $cliente = new Cliente();
        $nuevo = $cliente->insertar($data);
        header("location:".url_sitio);
    }
    // Actualizar cliente: mostrar formulario con datos actuales
    public function editarCliente(){
        $id = $_REQUEST['id'];
        $cond = "id=".$id;
        $cliente = new Cliente();
        $dato = $cliente->mostrar($cond);
        require_once("vista/cliente_edit.php");
    }
    // Actualizar cliente: guardar cambios en BD
    public function actualizarCliente(){
        $id = $_REQUEST['id'];
        $nomcliente  = $_REQUEST['nomcliente'];
        $dircliente  = $_REQUEST['dircliente'];
        $ruccliente  = $_REQUEST['ruccliente'];
        $telcliente  = $_REQUEST['telcliente'];
        $data = "nomcliente='".$nomcliente."', dircliente='".$dircliente."', ruccliente='".$ruccliente."', telcliente='".$telcliente."'";
        $cond = "id=".$id;
        $cliente = new Cliente();
        $actualizado = $cliente->actualizar($data,$cond);
        header("location:".url_sitio."index.php?m=listarCliente");
    }
    // Eliminar cliente
    public function eliminarCliente(){
        $id = $_REQUEST['id'];
        $cond = "id=".$id;
        $cliente = new Cliente();
        $eliminado = $cliente->eliminar($cond);
        header("location:".url_sitio."index.php?m=listarCliente");
    }
}
?>
