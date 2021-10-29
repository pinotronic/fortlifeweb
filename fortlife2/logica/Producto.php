<?php
require_once ("persistencia/ProductoDAO.php");
require_once ("persistencia/conexion.php");
class Producto{
    public $idProducto;
    public $nombre;
    public $cantidad;
    public $precio;
    public $productoDAO;
    public $conexion;
    function getIdProducto(){
        return $this -> idProducto;
    }
    function setIdProducto($pIdProducto){
        $this -> idproducto = $pIdProducto;
    }
    function getNombre(){
        return $this -> nombre;
    }
    function setNombre($nombre){
        $this -> nombre = $pNombre;
    }
    function getCantidad(){
        return $this -> cantidad;
    }
    function setCantidad($pCantidad){
        $this -> cantidad = $pCantidad;
    }
    function getPrecio(){
        return $this -> precio;
    }
    function setPrecio($pPrecio){
        $this -> precio = $pPrecio;
    }
    public function __construct($pIdProducto = "", $pNombre = "", $pCantidad = "" , $pPrecio =""){
                $this -> idProducto = $pIdProducto;
                $this -> nombre = $pNombre;
                $this -> cantidad = $pCantidad;
                $this -> precio = $pPrecio;
                $this -> productoDAO = new ProductoDAO($this -> idProducto, $this ->  nombre, $this -> cantidad, $this -> precio);
                $this -> conexion = new Conexion();
            }
    function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> insertar());
        $this -> conexion -> close();
    }
    function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> actualizar());
        $this -> conexion -> close();
    }
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> conexion -> close();
        $this -> idProducto = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> cantidad = $resultado[2];
        $this -> precio = $resultado[3];
    }
    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> consultarTodo());
        $productos = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($productos, new Producto($resultado[0], $resultado[1], $resultado[2], $resultado[3]));
        }
        $this -> conexion -> close();
        return $productos;
    }
    function consultarTodoOrden($order, $dir){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> 
            consultarTodoOrden($order, $dir));
        $productos = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($productos, new Producto($resultado[0],
            $resultado[1], $resultado[2], $resultado[3]));
        }
        $this -> conexion -> close();
        return $productos;
    }
    function buscar($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO ->
        buscar($filtro));
        $productos = array();
        while ($resultado = $this -> connexion -> extraer()){
            array_push($productos, new Productos($resultado[0],
            $resultado[1], $resultado[2], $resultado[3]));
        }
        $this -> conexion -> close();
        return $productos;
    }
    function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> eliminar());
        $this -> conexion -> close();
    }
}

?>