<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Doctor extends Usuario
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Doctor Attributes
  private $especialidad;
  private $horarioAtencion;

  //Doctor Associations
  private $cita;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdUsuario = null, $aNombre = null, $aApellido = null, $aCorreoElectronico = null, $aContrasena = null, $aEstado = null, $aTipoUsuario = null, $aEspecialidad = null, $aHorarioAtencion = null, $aCita = null)
  {
    if (func_num_args() == 0) { return; }

    parent::__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
    $this->especialidad = $aEspecialidad;
    $this->horarioAtencion = $aHorarioAtencion;
    if ($aCita == null || $aCita->getDoctor() != null)
    {
      throw new Exception("Unable to create Doctor due to aCita. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->cita = $aCita;
  }
  public static function newInstance($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario, $aEspecialidad, $aHorarioAtencion, $aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $aPacienteForCita, $aTipoTerapiaForCita, $aUsuarioForCita)
  {
    $thisInstance = new Doctor();
    $thisInstance->__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
    $thisInstance->especialidad = $aEspecialidad;
    $thisInstance->horarioAtencion = $aHorarioAtencion;
    $thisInstance->cita = new Cita($aIdCitaForCita, $aFechaHoraCitaForCita, $aEstadoPagoForCita, $aEstadoForCita, $aTipoCitaForCita, $aPacienteForCita, $thisInstance, $aTipoTerapiaForCita, $aUsuarioForCita);
    return $thisInstance;
  }
  private function callParentConstructor($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario)
  {
    parent::__construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario);
  }


  //------------------------
  // INTERFACE
  //------------------------

  public function setEspecialidad($aEspecialidad)
  {
    $wasSet = false;
    $this->especialidad = $aEspecialidad;
    $wasSet = true;
    return $wasSet;
  }

  public function setHorarioAtencion($aHorarioAtencion)
  {
    $wasSet = false;
    $this->horarioAtencion = $aHorarioAtencion;
    $wasSet = true;
    return $wasSet;
  }

  public function getEspecialidad()
  {
    return $this->especialidad;
  }

  public function getHorarioAtencion()
  {
    return $this->horarioAtencion;
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