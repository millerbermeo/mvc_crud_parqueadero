<?php
require_once "header.php";
?>

    <div class="formulario">
        <form action="?c=guardar" method="post" enctype="multipart/form-data">
            <h1>Registro de Vehiculos</h1>
            <div class="form-outline">
                <input type="hidden"name="idpuesto" value="<?php echo $alm->idpuesto; ?>">
                <input type="text" id="formControlDefault" name="nombre" class="form-control" value="<?php echo $alm->nombreCliente; ?>"/>
                <label class="form-label" for="formControlDefault">Nombre</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="documento" class="form-control" value="<?php echo $alm->documentoCliente; ?>"/>
                <label class="form-label" for="formControlDefault">Documento</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="marca" class="form-control" value="<?php echo $alm->marcaVehiculo; ?>"/>
                <label class="form-label" for="formControlDefault">Marca</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="placa" class="form-control" value="<?php echo $alm->placaVehiculo; ?>"/>
                <label class="form-label" for="formControlDefault">Placa</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="color" class="form-control" value="<?php echo $alm->color; ?>"/>
                <label class="form-label" for="formControlDefault">Color</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="ubicacion" class="form-control" value="<?php echo $alm->ubicacion; ?>"/>
                <label class="form-label" for="formControlDefault">Ubicacion</label>
            </div>


            <div class="form-outline">
                <input type="submit" class="btn btn-primary" name="ntym" value="Guardar"/>
                <a href="index.php" class="btn btn-secondary">Atras</a>
            </div>
        </form>
    </div>

<?php
require_once "footer.php";
?>