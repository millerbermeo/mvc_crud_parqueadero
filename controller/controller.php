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

    public function nuevo()
    {
        require_once "views/registrar.php";
    }

    public function guardar()
    {
        $alm = new model();
        $alm->nombreClente=$_POST['nombre'];
        $alm->documentoCliente=$_POST['documento'];
        $alm->marcaVehiculo=$_POST['marca'];
        $alm->placaVehiculo=$_POST['placa'];
        $alm->color=$_POST['color'];
        $alm->ubicacion=$_POST['ubicacion'];

        $this->MODEL->registrar($alm);

        header("Location: index.php");
    }
}
