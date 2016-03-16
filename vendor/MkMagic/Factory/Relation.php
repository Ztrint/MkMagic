<?php

namespace MkMagic\Factory;

class Relation {

  /**
   * @return \MkMagic\Model\Relation
   */
  public static function build($config) {
    $f = new \MkMagic\Model\Relation();

    $f->setName($config->get('name'));
    $f->setReferences($config->get('references'));
    $f->setMatching($config->get('matching'));

    return $f;
  }

}
