<?php

namespace MkMagic\Config;

class Loader {

  public static function load($file) {

    $s = file_get_contents(__DIR__ . "/../../../src/config/$file.json");
    $tree = json_decode($s);
    return new self($tree);
  }

  /*
   * Instance
   */

  private $tree = null;

  private function __construct($tree) {
    $this->tree = $tree;
  }

  public function getFrom($tree, $key, $default = null) {
    if (property_exists($tree, $key)) {
      $v = $tree->$key;
      if (is_object($v)) {
        return new self($v);
      } elseif (is_array($v)) {
        $a = [];
        foreach ($v as $e) {
          array_push($a, new self($e)); //recursive wrapper
        }
        return $a;
      } else {
        return $v;
      }
    } else {
      return $default;
    }
  }

  public function get($key, $default = null) {
    return $this->getFrom($this->tree, $key, $default);
  }

  public function all() {
    return $this->tree;
  }

}
