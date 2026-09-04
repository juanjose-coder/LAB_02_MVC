<?php
class Cliente{
    private $clientes;
    private $db;
    public function __construct(){
        $this->clientes = array();
        $this->db = new PDO('mysql:host=localhost;dbname=lab_02_mvc','root','');
    }
    // Listar todos los clientes
    public function listado(){
        $sql = "select * from clientes";
        $res = $this->db->query($sql);
        while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
            $this->clientes[] = $fila;
        }
        return $this->clientes;
    }
    // Insertar un nuevo cliente
    public function insertar($data){
        $sql = "insert into clientes values(null,".$data.")";
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
    // Mostrar un cliente segun condicion (por ejemplo id=x)
    public function mostrar($cond){
        $sql = "select * from clientes where ".$cond;
        $res = $this->db->query($sql);
        while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
            $this->clientes[] = $fila;
        }
        return $this->clientes;
    }
    // Actualizar un cliente
    public function actualizar($data,$cond){
        $sql = "update clientes set ".$data." where ".$cond;
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
    // Eliminar un cliente
    public function eliminar($cond){
        $sql ="delete from clientes where ".$cond;
        $res = $this->db->query($sql);
        if ($res)
            return true;
        else
            return false;
    }
}
?>
