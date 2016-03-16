<?php

namespace MkMagic\Factory;

class Module {

  /**
   * @return \MkMagic\Model\Module
   */
  public static function build($config) {
    $m = new \MkMagic\Model\Module();

    $m->setId($config->get('id'));
    $m->setAlias($config->get('alias'));
    $m->setEntity($config->get('entity'));
    $m->setIcon($config->get('icon'));

    return $m;
  }

}
