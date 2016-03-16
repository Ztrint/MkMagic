<?php

namespace MkMagic\Model;

class Module {

  protected $id = null;
  protected $alias = null;
  protected $entity = null;
  protected $icon = null;

  public function __construct() {
    
  }

  function getId() {
    return $this->id;
  }

  function setId($id) {
    $this->id = $id;
  }

  function getAlias() {
    return $this->alias;
  }

  function setAlias($alias) {
    $this->alias = $alias;
  }

  function getEntity() {
    return $this->entity;
  }

  function setEntity($entity) {
    $this->entity = $entity;
  }

  function getIcon() {
    return $this->icon;
  }

  function setIcon($icon) {
    $this->icon = $icon;
  }

}
