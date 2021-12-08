<?php
require_once "BasedeDatos.php";

class PoliclinicaModel
{
    private $policlinicas;

    public function __construct()
    {
        $this->policlinicas = array();
    }

    public function listar()
    {
        $sql = "SELECT nombrePoliclinica FROM policlinica;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $policlinicas[] = $filas;
        }
        return $policlinicas;
    }

}