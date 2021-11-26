<?php
class VeinticincoPuntosDAO{
    public $idVendedor;
    public $nombre;
    public $fecha;
    public $referidosObtenidos;
    public $referidosContactados;
    public $llamadasRealizadas;
    public $citasObtenidas;
    public $entInicialesAgendadas;
    public $entrevistaCuestionario;
    public $cierresAgendados;
    public $cierresRealizados;
    public $solicitudes;
    public $polizasPagadas;
    public function __construct($idVendedor, $nombre, $fecha, $referidosObtenidos, $referidosContactados, $llamadasRealizadas, $citasObtenidas, $entInicialesAgendadas, $entrevistaCuestionario, $cierresAgendados, $cierresRealizados, $solicitudes, $polizasPagadas){
        $this->idVendedor = $idVendedor;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->referidosObtenidos = $referidosObtenidos;
        $this->referidosContactados = $referidosContactados;
        $this->llamadasRealizadas = $llamadasRealizadas;
        $this->citasObtenidas = $citasObtenidas;
        $this->entInicialesAgendadas = $entInicialesAgendadas;
        $this->entrevistaCuestionario = $entrevistaCuestionario;
        $this->cierresAgendados = $cierresAgendados;
        $this->cierresRealizados = $cierresRealizados;
        $this->solicitudes = $solicitudes;
        $this->polizasPagadas = $polizasPagadas;
    }

    function consultar(){
        return "SELECT * FROM puntos";
    }
}
?>