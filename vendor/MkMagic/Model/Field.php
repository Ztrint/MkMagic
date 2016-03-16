<?php

namespace MkMagic\Model;

class Field {

  protected $name = null;
  protected $type = null;
  protected $alias = null;
  protected $identity = null;
  protected $length = null;

  public function __construct() {
    
  }

  function getName() {
    return $this->name;
  }

  function setName($name) {
    $this->name = $name;
  }

  function getType() {
    return $this->type;
  }

  function setType($type) {
    $this->type = $type;
  }

  function getAlias() {
    return empty($this->alias) ? $this->getName() : $this->alias;
  }

  function setAlias($alias) {
    $this->alias = $alias;
  }

  function isIdentity() {
    return !empty($this->identity);
  }

  function setIdentity($identity) {
    $this->identity = $identity;
  }

  function getLength() {
    return $this->length;
  }

  function setLength($length) {
    $this->length = $length;
  }

}
