<?php

namespace MkMagic\Renderer;

class Project {

  public static function render(\MkMagic\Model\Project $_p_) {
    $_d_ = \MkMagic\Config\Loader::load('dict');
    $_f_ = \MkMagic\Config\Loader::load('fixtures');

    $tpldir = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
    $l = $tpldir . 'layout.html';
    include_once $l;
  }

}
