<?php

class PoliclinicaModel
{
    private $db;
    private $policlinicas;

    public function __construct()
    {
        $this->db = Connection::conectar();
        $this->policlinicas = array();
    }

    public function obtenerPoliclinicas()
    {
        $sql = "SELECT * FROM policlinica;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $policlinicas[] = $filas;
        }
        return $policlinicas;
    }

    //listar solo nombre de la policlinica
    public function listarPoliclinicas()
    {
        $sql = "SELECT nombrePoliclinica FROM policlinica;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $policlinicas[] = $filas;
        }
        return $policlinicas;
    }
}