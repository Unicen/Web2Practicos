<?php

class VueloModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=airunicen;charset=utf8', 'root', '');
  }

  function getVuelos(){
    $select = $this->db->prepare("SELECT * FROM vuelo");
    $select->execute();
    $vuelos = $select->fetchAll(PDO::FETCH_ASSOC);
    return $vuelos;
  }

  function getEstado($vuelo){
    $select->execute($vuelo->id);
    $select = $this->db->prepare("SELECT TOP 1 estado FROM estado WHERE id_vuelo = ? ORDER BY fecha_hora ASC");
    $vuelos = $select->fetchColumn();
    return $vuelos;
  }

  function addEstado($vuelo, $estado){
    $insert = $this->db->prepare("INSERT INTO estado(id_vuelo, estado, fecha_hora) VALUES(?,?, NOW())");
    $insert->execute(array($vuelo->id,$estado->estado));
    $fk_tarea = $this->db->lastInsertId();
  }
  
  function addVuelo($vuelo){
    $insert = $this->db->prepare("INSERT INTO vuelo(origen, destino) VALUES(?,?)");
    $insert->execute(array($vuelo->origen, $vuelo->destino));
    $fk_tarea = $this->db->lastInsertId();
  }

}


?>
