<?php

require_once "model/model.php";

class parqueadero

{

    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new model();
    }

    public function index()
    {
        require_once "views/dashboard.php";
    }

    public function show(){
        $id = $_POST['idaguacate'];
        $dato = $this->MODEL->listarpersonalizado($id);
        require_once "views/show.php";
    }

/*    public function nuevo()
    {
        require_once "views/registrar.php";
    }*/

    public function eliminar() {
        $this->MODEL->delete($_REQUEST['id']);
        header("location: index.php");
    }

    public function nuevo(){
        $alm = new model();
        if (isset($_REQUEST['id'])){
            $alm = $this->MODEL->cargarID($_REQUEST['id']);
        }

        require_once "views/registrar.php";
    }

    public function guardar()
    {
        $alm = new model();
        $alm->idpuesto = $_POST['idpuesto'];
        $alm->nombreCliente = $_POST['nombre'];
        $alm->documentoCliente = $_POST['documento'];
        $alm->marcaVehiculo = $_POST['marca'];
        $alm->placaVehiculo = $_POST['placa'];
        $alm->color = $_POST['color'];
        $alm->ubicacion = $_POST['ubicacion'];

        // $this->MODEL->registrar($alm);

        $alm->idpuesto > 0 ? $this->MODEL->actualizar($alm) : $this->MODEL->registrar($alm);

        header("Location: index.php");
    }

}
