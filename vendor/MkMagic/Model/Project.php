<?php

namespace MkMagic\Model;

class Project {

  protected $name = null;
  protected $author = null;
  protected $version = null;
  protected $description = null;
  protected $entities = null;
  protected $modules = null;

  public function __construct() {
    $this->entities = [];
    $this->modules = [];
  }

  public function setName($v) {
    $this->name = $v;
  }

  public function getName() {
    return $this->name;
  }

  function getAuthor() {
    return $this->author;
  }

  function setAuthor($author) {
    $this->author = $author;
  }

  function getVersion() {
    return $this->version;
  }

  function setVersion($version) {
    $this->version = $version;
  }

  function getDescription() {
    return $this->description;
  }

  function setDescription($description) {
    $this->description = $description;
  }

  function getEntities() {
    return $this->entities;
  }

  function getEntity($key) {
    return $this->entities[$key];
  }

  public function addEntity($id, $v) {
    $this->entities[$id] = $v;
  }

  function getModules() {
    return $this->modules;
  }

  function getModule($key) {
    return $this->modules[$key];
  }

  public function addModule($id, $v) {
    $this->modules[$id] = $v;
  }

}
