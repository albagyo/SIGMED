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
        $consulta = $this->db->query("select * from policlinica;");
        while ($filas = $consulta->fetch_assoc()) {
            $policlinicas[] = $filas;
        }
        return $policlinicas;
    }

    //listar solo nombre de la policlinica
    public function listarPoliclinicas()
    {
        $consulta = $this->db->query("select nombrePoliclinica from policlinica;");
        while ($filas = $consulta->fetch_assoc()) {
            $policlinicas[] = $filas;
        }
        return $policlinicas;
    }
}