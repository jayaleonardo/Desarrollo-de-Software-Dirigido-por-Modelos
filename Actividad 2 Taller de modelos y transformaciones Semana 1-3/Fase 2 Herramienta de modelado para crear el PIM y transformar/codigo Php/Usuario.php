<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Usuario
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Usuario Attributes
  private $idUsuario;
  private $nombre;
  private $apellido;
  private $correoElectronico;
  private $contrasena;
  private $estado;
  private $tipoUsuario;

  //Usuario Associations
  private $rols;
  private $citas;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdUsuario, $aNombre, $aApellido, $aCorreoElectronico, $aContrasena, $aEstado, $aTipoUsuario)
  {
    $this->idUsuario = $aIdUsuario;
    $this->nombre = $aNombre;
    $this->apellido = $aApellido;
    $this->correoElectronico = $aCorreoElectronico;
    $this->contrasena = $aContrasena;
    $this->estado = $aEstado;
    $this->tipoUsuario = $aTipoUsuario;
    $this->rols = array();
    $this->citas = array();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdUsuario($aIdUsuario)
  {
    $wasSet = false;
    $this->idUsuario = $aIdUsuario;
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

  public function setApellido($aApellido)
  {
    $wasSet = false;
    $this->apellido = $aApellido;
    $wasSet = true;
    return $wasSet;
  }

  public function setCorreoElectronico($aCorreoElectronico)
  {
    $wasSet = false;
    $this->correoElectronico = $aCorreoElectronico;
    $wasSet = true;
    return $wasSet;
  }

  public function setContrasena($aContrasena)
  {
    $wasSet = false;
    $this->contrasena = $aContrasena;
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

  public function setTipoUsuario($aTipoUsuario)
  {
    $wasSet = false;
    $this->tipoUsuario = $aTipoUsuario;
    $wasSet = true;
    return $wasSet;
  }

  public function getIdUsuario()
  {
    return $this->idUsuario;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function getCorreoElectronico()
  {
    return $this->correoElectronico;
  }

  public function getContrasena()
  {
    return $this->contrasena;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function getTipoUsuario()
  {
    return $this->tipoUsuario;
  }

  public function getRol_index($index)
  {
    $aRol = $this->rols[$index];
    return $aRol;
  }

  public function getRols()
  {
    $newRols = $this->rols;
    return $newRols;
  }

  public function numberOfRols()
  {
    $number = count($this->rols);
    return $number;
  }

  public function hasRols()
  {
    $has = $this->numberOfRols() > 0;
    return $has;
  }

  public function indexOfRol($aRol)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->rols as $rol)
    {
      if ($rol->equals($aRol))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public function getCita_index($index)
  {
    $aCita = $this->citas[$index];
    return $aCita;
  }

  public function getCitas()
  {
    $newCitas = $this->citas;
    return $newCitas;
  }

  public function numberOfCitas()
  {
    $number = count($this->citas);
    return $number;
  }

  public function hasCitas()
  {
    $has = $this->numberOfCitas() > 0;
    return $has;
  }

  public function indexOfCita($aCita)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->citas as $cita)
    {
      if ($cita->equals($aCita))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public static function minimumNumberOfRols()
  {
    return 0;
  }

  public function addRolVia($aIdRol, $aNombre, $aPermiso)
  {
    return new Rol($aIdRol, $aNombre, $this, $aPermiso);
  }

  public function addRol($aRol)
  {
    $wasAdded = false;
    if ($this->indexOfRol($aRol) !== -1) { return false; }
    if ($this->indexOfRol($aRol) !== -1) { return false; }
    if ($this->indexOfRol($aRol) !== -1) { return false; }
    $existingUsuario = $aRol->getUsuario();
    $isNewUsuario = $existingUsuario != null && $this !== $existingUsuario;
    if ($isNewUsuario)
    {
      $aRol->setUsuario($this);
    }
    else
    {
      $this->rols[] = $aRol;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRol($aRol)
  {
    $wasRemoved = false;
    //Unable to remove aRol, as it must always have a usuario
    if ($this !== $aRol->getUsuario())
    {
      unset($this->rols[$this->indexOfRol($aRol)]);
      $this->rols = array_values($this->rols);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addRolAt($aRol, $index)
  {  
    $wasAdded = false;
    if($this->addRol($aRol))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRols()) { $index = $this->numberOfRols() - 1; }
      array_splice($this->rols, $this->indexOfRol($aRol), 1);
      array_splice($this->rols, $index, 0, array($aRol));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveRolAt($aRol, $index)
  {
    $wasAdded = false;
    if($this->indexOfRol($aRol) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRols()) { $index = $this->numberOfRols() - 1; }
      array_splice($this->rols, $this->indexOfRol($aRol), 1);
      array_splice($this->rols, $index, 0, array($aRol));
      $wasAdded = true;
    } 
    else 
    {
      $wasAdded = $this->addRolAt($aRol, $index);
    }
    return $wasAdded;
  }

  public static function minimumNumberOfCitas()
  {
    return 0;
  }

  public function addCitaVia($aIdCita, $aFechaHoraCita, $aEstadoPago, $aEstado, $aTipoCita, $aPaciente, $aDoctor, $aTipoTerapia)
  {
    return new Cita($aIdCita, $aFechaHoraCita, $aEstadoPago, $aEstado, $aTipoCita, $aPaciente, $aDoctor, $aTipoTerapia, $this);
  }

  public function addCita($aCita)
  {
    $wasAdded = false;
    if ($this->indexOfCita($aCita) !== -1) { return false; }
    if ($this->indexOfCita($aCita) !== -1) { return false; }
    if ($this->indexOfCita($aCita) !== -1) { return false; }
    $existingUsuario = $aCita->getUsuario();
    $isNewUsuario = $existingUsuario != null && $this !== $existingUsuario;
    if ($isNewUsuario)
    {
      $aCita->setUsuario($this);
    }
    else
    {
      $this->citas[] = $aCita;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeCita($aCita)
  {
    $wasRemoved = false;
    //Unable to remove aCita, as it must always have a usuario
    if ($this !== $aCita->getUsuario())
    {
      unset($this->citas[$this->indexOfCita($aCita)]);
      $this->citas = array_values($this->citas);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addCitaAt($aCita, $index)
  {  
    $wasAdded = false;
    if($this->addCita($aCita))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfCitas()) { $index = $this->numberOfCitas() - 1; }
      array_splice($this->citas, $this->indexOfCita($aCita), 1);
      array_splice($this->citas, $index, 0, array($aCita));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveCitaAt($aCita, $index)
  {
    $wasAdded = false;
    if($this->indexOfCita($aCita) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfCitas()) { $index = $this->numberOfCitas() - 1; }
      array_splice($this->citas, $this->indexOfCita($aCita), 1);
      array_splice($this->citas, $index, 0, array($aCita));
      $wasAdded = true;
    } 
    else 
    {
      $wasAdded = $this->addCitaAt($aCita, $index);
    }
    return $wasAdded;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    foreach ($this->rols as $aRol)
    {
      $aRol->delete();
    }
    foreach ($this->citas as $aCita)
    {
      $aCita->delete();
    }
  }

}
?>