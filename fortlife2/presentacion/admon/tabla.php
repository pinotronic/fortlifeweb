
        <!-- <main class="contenedor seccion contenido-centrado"> -->
<div class="container-fluid">   
    <div class="card">
    <div class="card-header">  
    <h4 class="card-title">25 Puntos tabla</h4>   
    </div>
    <div class="card-body">
<section>
    <div class="table-responsive">
        <table  class="table table-striped table-hover">
        <thead>
            <tr>
                <th >id </th>
                <th style="width: 180px;">Nombre </th>
                <th>Fecha </th>
                <th>Referidos Obtenidos </th>
                <th>Referidos Contactados </th>
                <th>Llamadas Realizadas. </th>
                <th>Citas Obtenidas </th>
                <th>Entrevistas Agendadas </th>
                <th>Entrevista Cuestionario </th>
                <th>Cierres Agendadas </th>
                <th>Cierres realizadas </th>
                <th>Solicitudes </th>
                <th>Polizas Pagadas. </th>
                <th>Total </th>
            </tr>
            </thead>
            <?php
            $var=0;
            $referidosObtenidos=0;
            $llamadaR = 0;
            $citasObt = 0;
            $concuestionario = 0;
            $realizadas = 0;
            $solicit = 0;
            $var = 0;
            $punto = new VeintiCincoPuntos();
            $puntos= $punto -> consultar();
            foreach ($puntos as $p) {
                $referidosObtenidos = $p->getReferidosObtenidos();
                if ($referidosObtenidos == "") {
                    $referidosObtenidos = 0;
                }
                $llamadaR = $p->getLlamadasRealizadas();
                if ($llamadaR == "") {
                    $llamadaR = 0;
                }
                $citasObt = $p->getCitasObtenidas();
                if ($citasObt == "") {
                    $citasObt = 0;
                }
                $concuestionario = $p->getEntrevistaCuestionario();
                if ($concuestionario == "") {
                    $concuestionario = 0;
                }
                $realizadas = $p->getCierresRealizados();
                if ($realizadas == "") {
                    $realizadas = 0;
                }
                $solicit = $p->getSolicitudes();
                if ($solicit == "") {
                    $solicit = 0;
                }

                $var = $referidosObtenidos * 3 + $llamadaR + $citasObt * 2 + $concuestionario * 2 + $realizadas * 3 + $solicit * 5;
                ?>
                <tr>
                    <td><?php echo $p->getIdVendedor(); ?></td>
                    <td><?php echo $p->getNombre(); ?></td>
                    <td><?php echo $p->getFecha(); ?></td>
                    <td><?php echo $p->getReferidosObtenidos(); ?></td>
                    <td><?php echo $p->getReferidosContactados(); ?></td>
                    <td><?php echo $p->getLlamadasRealizadas(); ?></td>
                    <td><?php echo $p->getCitasObtenidas(); ?></td>
                    <td><?php echo $p->getEntInicialesAgendadas(); ?></td>
                    <td><?php echo $p->getEntrevistaCuestionario(); ?></td>
                    <td><?php echo $p->getCierresAgendados(); ?></td>
                    <td><?php echo $p->getCierresRealizados(); ?></td>
                    <td><?php echo $p->getSolicitudes(); ?></td>
                    <td><?php echo $p->getPolizasPagadas(); ?></td>
                    <td ><?php echo $var ?></td>
                    <td class="centrar-texto table--item"><?php $var1 ?></td>

                    
                </tr>
            <?php
            }
            ?>
        </table>
</section>

        </div>
        </div>
        </div>
        </div>

