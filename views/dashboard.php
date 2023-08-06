<?php
require_once "header.php";
?>

    <div class="top-nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AGUACATO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Acciones
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?c=nuevo">Registrar</a></li>
                                <li><a class="dropdown-item" href="#">Actualizar</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Eliminar</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="?c=show" method="post" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar por id" name="idaguacate"
                               aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

<h1 style="margin-top: 60px">Parqueadero el Aguacate</h1>

    <a href="?c=nuevo" style="margin-top: 50px; margin-left: 10px" type="button" class="btn btn-success">Registrar</a>
    <table style="margin-top: 10px;" class="table table-striped ">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Marca</th>
            <th scope="col">Placa</th>
            <th scope="col">Color</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Hora Ingreso</th>
            <th scope="col">Hora Salida</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <?php foreach ($this->MODEL->listar() as $k): ?>
            <tbody>
            <tr>
                <th scope="row"><?php echo $k['idpuesto'] ?></th>
                <td><?php echo $k['nombreCliente'] ?></td>
                <td><?php echo $k['documentoCliente'] ?></td>
                <td><?php echo $k['marcaVehiculo'] ?></td>
                <td><?php echo $k['placaVehiculo'] ?></td>
                <td><?php echo $k['color'] ?></td>
                <td><?php echo $k['ubicacion'] ?></td>
                <td><?php echo $k['horaIngreso'] ?></td>
                <td><?php echo $k['horaSalida'] ?></td>
                <td><?php echo $k['estadoParqueadero'] ?></td>
                <td style="display: flex; gap: 5px">
                    <a href="?c=nuevo&id=<?php echo $k['idpuesto']?>"  class="btn btn-primary">Editar</a>
                    <a href="?c=eliminar&id=<?php echo $k['idpuesto']?>" class="btn btn-danger">Eliminar</a>

                </td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>


<?php
require_once "footer.php";
?>