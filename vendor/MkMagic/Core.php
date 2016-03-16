<?php

namespace MkMagic;

class Core {

  public static function run() {
    $config = Config\Loader::load('project');
    $p = Factory\Project::build($config);

    Renderer\Project::render($p);
  }

}
