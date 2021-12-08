<?php
require_once "BasedeDatos.php";

class MedicoModel
{
    private $medicos;

    public function __construct()
    {
        $this->medicos = array();
    }

    //listar solo nombre del medico
    public function listar()
    {
        $sql = "SELECT nombreMedico, apellidoMedico, codMedico,
                CONCAT (nombreMedico, ' ', apellidoMedico) as medico 
                FROM medico;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

}