<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.33.0.6934.a386b0a58 modeling language!*/

class Permiso
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Permiso Attributes
  private $idPermiso;
  private $nombre;

  //Permiso Associations
  private $rol;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aIdPermiso = null, $aNombre = null, $aRol = null)
  {
    if (func_num_args() == 0) { return; }

    $this->idPermiso = $aIdPermiso;
    $this->nombre = $aNombre;
    if ($aRol == null || $aRol->getPermiso() != null)
    {
      throw new Exception("Unable to create Permiso due to aRol. See http://manual.umple.org?RE002ViolationofAssociationMultiplicity.html");
    }
    $this->rol = $aRol;
  }
  public static function newInstance($aIdPermiso, $aNombre, $aIdRolForRol, $aNombreForRol, $aUsuarioForRol)
  {
    $thisInstance = new Permiso();
    $thisInstance->idPermiso = $aIdPermiso;
    $thisInstance->nombre = $aNombre;
    $thisInstance->rol = new Rol($aIdRolForRol, $aNombreForRol, $aUsuarioForRol, $thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setIdPermiso($aIdPermiso)
  {
    $wasSet = false;
    $this->idPermiso = $aIdPermiso;
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

  public function getIdPermiso()
  {
    return $this->idPermiso;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getRol()
  {
    return $this->rol;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingRol = $this->rol;
    $this->rol = null;
    if ($existingRol != null)
    {
      $existingRol->delete();
    }
  }

}
?>