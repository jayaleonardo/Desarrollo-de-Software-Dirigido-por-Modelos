<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Rol
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Rol Attributes
  private $idRol;
  private $nombre;

  //Rol Associations
  private $usuario;
  private $permiso;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdRol = null, $aNombre = null, $aUsuario = null, $aPermiso = null)
  {
    if (func_num_args() == 0) { return; }

    $this->idRol = $aIdRol;
    $this->nombre = $aNombre;
    $didAddUsuario = $this->setUsuario($aUsuario);
    if (!$didAddUsuario)
    {
      throw new Exception("Unable to create rol due to usuario. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    if ($aPermiso == null || $aPermiso->getRol() != null)
    {
      throw new Exception("Unable to create Rol due to aPermiso. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->permiso = $aPermiso;
  }
  public static function newInstance($aIdRol, $aNombre, $aUsuario, $aIdPermisoForPermiso, $aNombreForPermiso)
  {
    $thisInstance = new Rol();
    $thisInstance->idRol = $aIdRol;
    $thisInstance->nombre = $aNombre;$this->usuarios = array();
    $this->usuarios[] = $aUsuario;
    $thisInstance->permiso = new Permiso($aIdPermisoForPermiso, $aNombreForPermiso, $thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdRol($aIdRol)
  {
    $wasSet = false;
    $this->idRol = $aIdRol;
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

  public function getIdRol()
  {
    return $this->idRol;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function getPermiso()
  {
    return $this->permiso;
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
      $existingUsuario->removeRol($this);
    }
    $this->usuario->addRol($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $placeholderUsuario = $this->usuario;
    $this->usuario = null;
    $placeholderUsuario->removeRol($this);
    $existingPermiso = $this->permiso;
    $this->permiso = null;
    if ($existingPermiso != null)
    {
      $existingPermiso->delete();
    }
  }

}
?>