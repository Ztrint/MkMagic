<?php

namespace MkMagic\Factory;

class Field {

  /**
   * @return \MkMagic\Model\Field
   */
  public static function build($config) {
    $f = new \MkMagic\Model\Field();

    $f->setName($config->get('name'));
    $f->setType($config->get('type'));
    $f->setAlias($config->get('alias'));
    $f->setIdentity($config->get('identity'));
    $f->setLength($config->get('length'));

    return $f;
  }

}
