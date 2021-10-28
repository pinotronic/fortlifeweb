<?php
class ProductoDAO{
    public $idProducto;
    public $nombre;
    public $cantidad;
    public $precio;
    public function __construct($pIdProducto = "", $pNombre = "", $pCantidad = "", $pPrecio =""){
        $this -> idProducto = $pIdProducto;
        $this -> nombre = $pNombre;
        $this -> cantidad = $pCantidad;
        $this -> precio = $pPrecio;
    }
    function insertar(){
        return "insert into Producto(nombre, cantidad, precio)
                values (\"" . $this -> nombre . "\",
                       \"" . $this -> cantidad . "\",
                       \"" . $this -> precio . "\")";
    }
    function actualizar(){
        return "update Producto set
                nombre = \"" . $this -> nombre . "\",
                cantidad = \"" . $this -> cantidad . "\",
                precio = \"" . $this -> precio . "\"
                where idProducto = \"". $this -> idProducto . "\"";
    }
    function consultar(){
        return "select idProducto, nombre, cantidad, precio
                from Producto
                where idProducto = \"" . $this -> idProducto . "\"";
    }
    function consultarTodo(){
        return "select idProducto, nombre, cantidad, precio from Producto";
    }
    function consultarTodoOrden($orden, $dir){
        return "select idProducto, nombre, cantidad, precio
                from Producto
                order by " . $orden . " " .$dir;
    }
    function buscar($filtro){
        return "select idProducto, nombre, cantidad, precio
                from Producto
                where nombre like \"%" . $filtro . "%\" or
                        cantidad like \"%" . $filtro . "%\" or
                        precio like \"%" . $filtro . "%\" ";
    }
    function eliminar(){
        return "delete from Producto
        where idProducto = \"" . $this -> idProducto . "\""; 
    }
}
?>