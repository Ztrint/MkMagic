<?php

namespace MkMagic\Model;

class Relation {

  protected $name = null;
  protected $references = null;
  protected $matching = null;

  public function __construct() {
    
  }

  function getName() {
    return $this->name;
  }

  function setName($name) {
    $this->name = $name;
  }

  function getReferences() {
    return $this->references;
  }

  function setReferences($references) {
    $this->references = $references;
  }

  function getMatching() {
    return $this->matching;
  }

  function setMatching($matching) {
    $this->matching = $matching;
  }

}
