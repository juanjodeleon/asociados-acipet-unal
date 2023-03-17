<?php
   class Asociados extends conectar{
    public function get_asociados(){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="SELECT * FROM tm_asociados";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado=$sql->fetchAll();
    }

    public function get_asociados_x_id($aso_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM tm_asociados WHERE aso_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$aso_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
        }

        public function delete_asociados($aso_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_asociados WHERE aso_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$aso_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            }
   }
?>