<?php

namespace MkMagic\Helper;

class Text {

  public static function capitalize($s) {
    return ucfirst($s);
  }

  public function pluralize($word) {
    $pl = [
        'default' => '%sos',
        'rules' => [
            '/[aeioukctm]$/i' => '%ss', //eg. tótems, kayaks, 
            '/[z]$/i' => '%s-ces',
            '/[dnsrl]$/i' => '%ses', //eg. viruses, especiales, edades
            '/[x]$/i' => '%s', //eg. tórax
        ]
    ];
    foreach ($pl['rules'] as $k => $v) {
      if (preg_match($k, $word)) {
        return sprintf($v, $word);
      }
    }
    return sprintf($pl['default'], $word);
  }

}
