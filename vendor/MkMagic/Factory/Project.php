<?php

namespace MkMagic\Factory;

class Project {

  /**
   * @return \MkMagic\Model\Project
   */
  public static function build($config) {
    $p = new \MkMagic\Model\Project();

    //fill
    $p->setName($config->get('name'));
    $p->setAuthor($config->get('author'));
    $p->setDescription($config->get('description'));
    $p->setVersion($config->get('version'));

    foreach ($config->get('entities') as $v) {
      //$p->addEntity($v->id, $v);
      $p->addEntity($v->get('id'), Entity::build($v));
    }
    foreach ($config->get('modules') as $v) {
      $p->addModule($v->get('id'), Module::build($v));
    }

    //link
    foreach ($p->getEntities() as $e) {
      foreach ($e->getRelations() as $r) {
        $r->setReferences($p->getEntity($r->getReferences()));
      }
    }
    foreach ($p->getModules() as $m) {
      $m->setEntity($p->getEntity($m->getEntity()));
    }

    return $p;
  }

}
