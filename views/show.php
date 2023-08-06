<?php
require_once "header.php";
?>

    <div class="card" style="width: 18rem; margin: auto; margin-top: 100px; border: 1px solid gray">
        <?php if (!empty($dato)) : ?>
        <?php foreach ($dato as $k) : ?>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $k['idpuesto']?></li>
            <li class="list-group-item"><?php echo $k['nombreCliente']?></li>
            <li class="list-group-item"><?php echo $k['documentoCliente']?></li>
            <li class="list-group-item"><?php echo $k['marcaVehiculo']?></li>
            <li class="list-group-item"><?php echo $k['placaVehiculo']?></li>
            <li class="list-group-item"><?php echo $k['color']?></li>
            <li class="list-group-item"><?php echo $k['ubicacion']?></li>
            <li class="list-group-item"><?php echo $k['horaIngreso']?></li>
            <li class="list-group-item"><?php echo $k['horaSalida']?></li>
            <li class="list-group-item"><?php echo $k['estadoParqueadero']?></li>
            <li class="list-group-item"><a href="index.php" class="btn btn-primary">Atras</a></li>
        </ul>
        <?php endforeach; ?>
        <?php else : ?>
        <ul class="list-group list-group-flush"><li class="list-group-item">No hay datos disponibles.</li>
            <li class="list-group-item"><a href="index.php" class="btn btn-primary">Atras</a></li>
        </ul>

        <?php endif; ?>
    </div>

<?php
require_once "footer.php";
?>