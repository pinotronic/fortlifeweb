<?php
class Conexion {
    public $mysqli;
    public $resultado;
    public function abrir(){
        $this -> mysqli = new mysqli("localhost", "root", "", "fortlife");
        $this -> mysqli -> set_charset("utf8");
        if ($this -> mysqli -> connect_errno){
            echo "fallo la conexion";
            }else{
            echo "";
            }
    }
    function ejecutar($sentencia){
        $this -> resultado = $this -> mysqli -> query ($sentencia);
    }
    function close(){
        $this -> mysqli -> close();
    } 
    function numFilas(){
        return ($this -> resultado != null) ?
                $this -> resultado -> num_rows : 0;
    }
    function extraer(){
        return $this -> resultado -> fetch_row();
    }
    function ultimoId(){
        return $this -> mysqli -> insert_id;
    }
}
?>