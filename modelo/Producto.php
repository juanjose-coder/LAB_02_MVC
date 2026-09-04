<?php
class Producto{
    private $productos;
    private $db;
    public function __construct(){
        $this->productos = array();
        $this->db = new PDO('mysql:host=localhost;dbname=lab_02_mvc','root','');
    }
    public function listado(){
        $sql = "select * from productos";
        $res = $this->db->query($sql);
        while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
            $this->productos[] = $fila;
        }
        return $this->productos;
    }
    public function insertar($data){
        $sql = "insert into productos values(null,".$data.")";
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
    public function mostrar($cond){
        $sql = "select * from productos where ".$cond;
        $res = $this->db->query($sql);
        while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
            $this->productos[] = $fila;
        }
        return $this->productos;
    }
    public function actualizar($data,$cond){
        $sql = "update productos set ".$data." where ".$cond;
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
    public function eliminar($cond){
        $sql ="delete from productos where ".$cond;
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
}
?>
