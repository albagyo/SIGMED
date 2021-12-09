<?php
class MedicoModel
{
    private $medicos;
    private $db;

    public function __construct()
    {
        $this->db = Connect::conectar();
        $this->medicos = array();
    }

    //listar solo nombre del medico
    public function listar()
    {
        $sql = "SELECT nombreMedico, apellidoMedico, codMedico,
                CONCAT (nombreMedico, ' ', apellidoMedico) as medico 
                FROM medico;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->medicos[] = $filas;
        }
        return $this->medicos;
    }

}