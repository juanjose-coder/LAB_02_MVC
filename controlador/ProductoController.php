<?php
require_once("modelo/Producto.php");
class ProductoController{
    private $modelo;

    function __construct(){
        $this->modelo = new Producto();
    }
    // Mostrar productos
    public function listar(){
        $producto = new Producto();
        $dato = $producto->listado();
        require_once("vista/producto_view.php");
    }
    // Insertar productos
    public function nuevo(){
        require_once("vista/nuevo_prod.php");
    }
    public function guardar(){
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'".$nombre."',".$precio;
        $producto = new Producto();
        $nuevo = $producto->insertar($data);
        header("location:".url_sitio);
    }
    // Actualizar productos
    public function editar(){
        $id = $_REQUEST['id'];
        $cond = "id=".$id;
        $producto = new Producto();
        $dato = $producto->mostrar($cond);
        require_once("vista/producto_edit.php");
    }
    public function update(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "nombre='".$nombre."', precio=".$precio;
        $cond = "id=".$id;
        $producto = new Producto();
        $actualizado = $producto->actualizar($data,$cond);
        header("location:".url_sitio);
    }
    // Borrar productos
    public function eliminar(){
        $id = $_REQUEST['id'];
        $cond = "id=".$id;
        $producto = new Producto();
        $eliminado = $producto->eliminar($cond);
        header("location:".url_sitio);
    }
}
?>
