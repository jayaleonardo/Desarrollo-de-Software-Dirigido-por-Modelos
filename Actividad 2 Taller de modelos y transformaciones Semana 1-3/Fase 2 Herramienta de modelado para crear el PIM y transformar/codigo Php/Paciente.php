<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Paciente extends Usuario
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Paciente Attributes
  private $fechaNacimiento;

  //Paciente Associations
  private $cita;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdUsuario = null, $aNombre = null, $aApellido = null, $aCorreoElectronico = null, $aContrasena = null, $aEstado = null, $aTipoUsuario = null, $aFechaNacimiento = null, $aCita = null)
  {
    if (func_num_args() == 0) { return; }

    parent::__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
    $this->fechaNacimiento = $aFechaNacimiento;
    if ($aCita == null || $aCita->getPaciente() != null)
    {
      throw new Exception("Unable to create Paciente due to aCita. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->cita = $aCita;
  }
  public static function newInstance($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario, $aFechaNacimiento, $aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $aDoctorForCita, $aTipoTerapiaForCita, $aUsuarioForCita)
  {
    $thisInstance = new Paciente();
    $thisInstance->__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
    $thisInstance->fechaNacimiento = $aFechaNacimiento;
    $thisInstance->cita = new Cita($aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $thisInstance, $aDoctorForCita, $aTipoTerapiaForCita, $aUsuarioForCita);
    return $thisInstance;
  }
  private function callParentConstructor($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario)
  {
    parent::__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
  }


  //------------------------
  // INTERFACE
  //------------------------

  public function setFechaNacimiento($aFechaNacimiento)
  {
    $wasSet = false;
    $this->fechaNacimiento = $aFechaNacimiento;
    $wasSet = true;
    return $wasSet;
  }

  public function getFechaNacimiento()
  {
    return $this->fechaNacimiento;
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
    parent::delete();
  }

}
?>