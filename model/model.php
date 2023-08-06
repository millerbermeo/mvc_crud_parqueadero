<?php
require_once "config/conexion.php";

class model
{

    public $cnx;
    public $idpuesto;
    public $nombreCliente;
    public $documentoCliente;
    public $marcaVehiculo;
    public $placaVehiculo;
    public $color;
    public $ubicacion;

    public function __construct()
    {
        try {
            $this->cnx = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $query = "SELECT * from aguacate";
            /*            $query = "SELECT a.nombreCliente, a.documentoCliente, a.marcaVehiculo, a.placaVehiculo, a.color, a.ubicacion from aguacate a";*/
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
  /*  public function listarpersonalizado($id)
    {
        $query = "SELECT * FROM aguacate WHERE idpuesto = :id";
        $arrData = array(":id" => $id);
        $smt = $this->cnx->prepare($query);
        $smt->execute($arrData);
    }*/

    // En el modelo
    public function listarpersonalizado($id)
    {
        $query = "SELECT * FROM aguacate WHERE idpuesto = :id";
        $arrData = array(":id" => $id);
        $smt = $this->cnx->prepare($query);
        $smt->execute($arrData);
        return $smt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function cargarID($id) {
        try {
            $query = "SELECT * FROM aguacate WHERE idpuesto = ?";
            $smt = $this->cnx->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try {
            $query = "DELETE from aguacate where idpuesto = ?";
            $smt = $this->cnx->prepare($query);
            $smt->execute(array($id));
        }catch (Exception $e){
            die($e->getMessage());
        }
    }




    public function registrar(model $data)
    {
        try {
            $query = "INSERT INTO aguacate (nombreCliente, documentoCliente, marcaVehiculo, placaVehiculo, color, ubicacion) values (?,?,?,?,?,?)";
            $this->cnx->prepare($query)->execute(array($data->nombreCliente, $data->documentoCliente, $data->marcaVehiculo, $data->placaVehiculo, $data->color, $data->ubicacion));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizar(model $data){
        try {
            $query = "UPDATE aguacate SET nombreCliente=?, documentoCliente=?, marcaVehiculo=?, placaVehiculo=?, color=?, ubicacion=? where idpuesto=?";
            $smt = $this->cnx->prepare($query);
            $smt->execute([$data->nombreCliente, $data->documentoCliente, $data->marcaVehiculo, $data->placaVehiculo, $data->color, $data->ubicacion, $data->idpuesto]);
        }catch (Exception $exception){
            die($exception->getMessage());
        }
    }
}

?>