<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class TipoTerapia
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //TipoTerapia Attributes
  private $idTipoTerapia;
  private $nombre;
  private $duracion;
  private $costo;

  //TipoTerapia Associations
  private $cita;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdTipoTerapia = null, $aNombre = null, $aDuracion = null, $aCosto = null, $aCita = null)
  {
    if (func_num_args() == 0) { return; }

    $this->idTipoTerapia = $aIdTipoTerapia;
    $this->nombre = $aNombre;
    $this->duracion = $aDuracion;
    $this->costo = $aCosto;
    if ($aCita == null || $aCita->getTipoTerapia() != null)
    {
      throw new Exception("Unable to create TipoTerapia due to aCita. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->cita = $aCita;
  }
  public static function newInstance($aIdTipoTerapia, $aNombre, $aDuracion, $aCosto, $aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $aPacienteForCita, $aDoctorForCita, $aUsuarioForCita)
  {
    $thisInstance = new TipoTerapia();
    $thisInstance->idTipoTerapia = $aIdTipoTerapia;
    $thisInstance->nombre = $aNombre;
    $thisInstance->duracion = $aDuracion;
    $thisInstance->costo = $aCosto;
    $thisInstance->cita = new Cita($aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $aPacienteForCita, $aDoctorForCita, $thisInstance, $aUsuarioForCita);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdTipoTerapia($aIdTipoTerapia)
  {
    $wasSet = false;
    $this->idTipoTerapia = $aIdTipoTerapia;
    $wasSet = true;
    return $wasSet;
  }

  public function setNombre($aNombre)
  {
    $wasSet = false;
    $this->nombre = $aNombre;
    $wasSet = true;
    return $wasSet;
  }

  public function setDuracion($aDuracion)
  {
    $wasSet = false;
    $this->duracion = $aDuracion;
    $wasSet = true;
    return $wasSet;
  }

  public function setCosto($aCosto)
  {
    $wasSet = false;
    $this->costo = $aCosto;
    $wasSet = true;
    return $wasSet;
  }

  public function getIdTipoTerapia()
  {
    return $this->idTipoTerapia;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getDuracion()
  {
    return $this->duracion;
  }

  public function getCosto()
  {
    return $this->costo;
  }

  public function getCita()
  {
    return $this->cita;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingCita = $this->cita;
    $this->cita = null;
    if ($existingCita != null)
    {
      $existingCita->delete();
    }
  }

}
?>