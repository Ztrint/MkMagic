<?php

namespace MkMagic\Autoloader;

class Autoloader {

  private static $dirs = ['src', 'vendor'];
  private static $files = [];

  private static function isACodeFile($filename) {
    return strpos($filename, '.php');
  }

  public static function requireAll() {
    $base = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

    foreach (self::$dirs as $d) {
      $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($base . $d), \RecursiveIteratorIterator::SELF_FIRST);

      foreach ($iterator as $filename => $object) {

        if ((self::isACodeFile($filename) > -1) && (strpos($filename, self::class) == false)) {
          self::$files[$filename] = '';
        }
      }

      foreach (self::$files as $f => $x) {
        require $f;
      }
    }
  }

  public static function init() {
    self::requireAll();
  }

}
