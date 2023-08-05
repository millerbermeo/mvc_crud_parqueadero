<?php
require_once "header.php";
?>

    <div class="formulario">
        <form action="?c=guardar" method="post" enctype="multipart/form-data">
            <h1>Registro de Vehiculos</h1>
            <div class="form-outline">
                <input type="text" id="formControlDefault" name="nombre" class="form-control" />
                <label class="form-label" for="formControlDefault">Nombre</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="documento" class="form-control" />
                <label class="form-label" for="formControlDefault">Documento</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="marca" class="form-control" />
                <label class="form-label" for="formControlDefault">Marca</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="placa" class="form-control" />
                <label class="form-label" for="formControlDefault">Placa</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="color" class="form-control" />
                <label class="form-label" for="formControlDefault">Color</label>
            </div>

            <div class="form-outline">
                <input type="text" id="formControlDefault" name="ubicacion" class="form-control" />
                <label class="form-label" for="formControlDefault">Ubicacion</label>
            </div>


            <div class="form-outline">
                <input type="submit" class="btn btn-primary" name="ntym" value="Guardar"></input>
            </div>
        </form>
    </div>

<?php
require_once "footer.php";
?>