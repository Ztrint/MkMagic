<?php

namespace MkMagic\Factory;

class Entity {

  /**
   * @return \MkMagic\Model\Entity
   */
  public static function build($config) {
    $e = new \MkMagic\Model\Entity();

    $e->setId($config->get('id'));
    $e->setAlias($config->get('alias'));
    $e->setPlain($config->get('plain'));

    foreach ($config->get('fields', []) as $v) {
      $e->addField($v->get('name'), Field::build($v));
    }
    foreach ($config->get('relations', []) as $v) {
      $e->addRelation($v->get('name'), Relation::build($v));
    }

    return $e;
  }

}
