<?php
class PoliclinicaModel
{
    private $policlinicas;
    private $db;
    
    public function __construct()
    {
        $this->db = Connect::conectar();
        $this->policlinicas = array();
    }

    public function listar()
    {
        $sql = "SELECT nombrePoliclinica FROM policlinica;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->policlinicas[] = $filas;
        }
        return $policlinicas;
    }

}