<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Cita
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Cita Attributes
  private $idCita;
  private $fechaHoraCita;
  private $estadoPago;
  private $estado;
  private $tipoCita;

  //Cita Associations
  private $paciente;
  private $doctor;
  private $tipoTerapia;
  private $usuario;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdCita = null, $aFechaHoraCita = null, $aEstadoPago = null, $aEstado = null, $aTipoCita = null, $aPaciente = null, $aDoctor = null, $aTipoTerapia = null, $aUsuario = null)
  {
    if (func_num_args() == 0) { return; }

    $this->idCita = $aIdCita;
    $this->fechaHoraCita = $aFechaHoraCita;
    $this->estadoPago = $aEstadoPago;
    $this->estado = $aEstado;
    $this->tipoCita = $aTipoCita;
    if ($aPaciente == null || $aPaciente->getCita() != null)
    {
      throw new Exception("Unable to create Cita due to aPaciente. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->paciente = $aPaciente;
    if ($aDoctor == null || $aDoctor->getCita() != null)
    {
      throw new Exception("Unable to create Cita due to aDoctor. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->doctor = $aDoctor;
    if ($aTipoTerapia == null || $aTipoTerapia->getCita() != null)
    {
      throw new Exception("Unable to create Cita due to aTipoTerapia. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->tipoTerapia = $aTipoTerapia;
    $didAddUsuario = $this->setUsuario($aUsuario);
    if (!$didAddUsuario)
    {
      throw new Exception("Unable to create cita due to usuario. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
  }
  public static function newInstance($aIdCita, $aFechaHoraCita, $aEstadoPago, $aEstado, $aTipoCita, $aIdUsuarioForPaciente, $aNombreForPaciente, $aApellidoForPaciente, $aCorreoElectronicoForPaciente, $aContrasenaForPaciente, $aEstadoForPaciente, $aTipoUsuarioForPaciente, $aFechaNacimientoForPaciente, $aIdUsuarioForDoctor, $aNombreForDoctor, $aApellidoForDoctor, $aCorreoElectronicoForDoctor, $aContrasenaForDoctor, $aEstadoForDoctor, $aTipoUsuarioForDoctor, $aEspecialidadForDoctor, $aHorarioAtencionForDoctor, $aIdTipoTerapiaForTipoTerapia, $aNombreForTipoTerapia, $aDuracionForTipoTerapia, $aCostoForTipoTerapia, $aUsuario)
  {
    $thisInstance = new Cita();
    $thisInstance->idCita = $aIdCita;
    $thisInstance->fechaHoraCita = $aFechaHoraCita;
    $thisInstance->estadoPago = $aEstadoPago;
    $thisInstance->estado = $aEstado;
    $thisInstance->tipoCita = $aTipoCita;
    $thisInstance->paciente = new Paciente($aIdUsuarioForPaciente, $aNombreForPaciente, $aApellidoForPaciente, $aCorreoElectronicoForPaciente, $aContrasenaForPaciente, $aEstadoForPaciente, $aTipoUsuarioForPaciente, $aFechaNacimientoForPaciente, $thisInstance);
    $thisInstance->doctor = new Doctor($aIdUsuarioForDoctor, $aNombreForDoctor, $aApellidoForDoctor, $aCorreoElectronicoForDoctor, $aContrasenaForDoctor, $aEstadoForDoctor, $aTipoUsuarioForDoctor, $aEspecialidadForDoctor, $aHorarioAtencionForDoctor, $thisInstance);
    $thisInstance->tipoTerapia = new TipoTerapia($aIdTipoTerapiaForTipoTerapia, $aNombreForTipoTerapia, $aDuracionForTipoTerapia, $aCostoForTipoTerapia, $thisInstance);$this->usuarios = array();
    $this->usuarios[] = $aUsuario;
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdCita($aIdCita)
  {
    $wasSet = false;
    $this->idCita = $aIdCita;
    $wasSet = true;
    return $wasSet;
  }

  public function setFechaHoraCita($aFechaHoraCita)
  {
    $wasSet = false;
    $this->fechaHoraCita = $aFechaHoraCita;
    $wasSet = true;
    return $wasSet;
  }

  public function setEstadoPago($aEstadoPago)
  {
    $wasSet = false;
    $this->estadoPago = $aEstadoPago;
    $wasSet = true;
    return $wasSet;
  }

  public function setEstado($aEstado)
  {
    $wasSet = false;
    $this->estado = $aEstado;
    $wasSet = true;
    return $wasSet;
  }

  public function setTipoCita($aTipoCita)
  {
    $wasSet = false;
    $this->tipoCita = $aTipoCita;
    $wasSet = true;
    return $wasSet;
  }

  public function getIdCita()
  {
    return $this->idCita;
  }

  public function getFechaHoraCita()
  {
    return $this->fechaHoraCita;
  }

  public function getEstadoPago()
  {
    return $this->estadoPago;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function getTipoCita()
  {
    return $this->tipoCita;
  }

  public function getPaciente()
  {
    return $this->paciente;
  }

  public function getDoctor()
  {
    return $this->doctor;
  }

  public function getTipoTerapia()
  {
    return $this->tipoTerapia;
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function setUsuario($aUsuario)
  {
    $wasSet = false;
    if ($aUsuario == null)
    {
      return $wasSet;
    }
    
    $existingUsuario = $this->usuario;
    $this->usuario = $aUsuario;
    if ($existingUsuario != null && $existingUsuario != $aUsuario)
    {
      $existingUsuario->removeCita($this);
    }
    $this->usuario->addCita($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingPaciente = $this->paciente;
    $this->paciente = null;
    if ($existingPaciente != null)
    {
      $existingPaciente->delete();
    }
    $existingDoctor = $this->doctor;
    $this->doctor = null;
    if ($existingDoctor != null)
    {
      $existingDoctor->delete();
    }
    $existingTipoTerapia = $this->tipoTerapia;
    $this->tipoTerapia = null;
    if ($existingTipoTerapia != null)
    {
      $existingTipoTerapia->delete();
    }
    $placeholderUsuario = $this->usuario;
    $this->usuario = null;
    $placeholderUsuario->removeCita($this);
  }

}
?>