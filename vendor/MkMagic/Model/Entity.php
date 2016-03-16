<?php

namespace MkMagic\Model;

class Entity {

  protected $id = null;
  protected $alias = null;
  protected $plain = null;
  protected $fields = null;
  protected $relations = null;

  public function __construct() {
    $this->fields = [];
    $this->relations = [];
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

  function getPlain() {
    return $this->plain;
  }

  function setPlain($plain) {
    $this->plain = $plain;
  }

  function getFields() {
    return $this->fields;
  }

  public function addField($id, $v) {
    $this->fields[$id] = $v;
  }

  function getRelations() {
    return $this->relations;
  }

  public function addRelation($id, $v) {
    $this->relations[$id] = $v;
  }

  /*
   * additional functions
   */

  public function asString($x) {
    $s = '';
    foreach ($this->plain as $e) {
      $v = $x->get($e->all());
      if (empty($v)) {
        $s.=$e->all();
      } else {
        $s.=$v;
      }
    }
    return $s;
  }

}
