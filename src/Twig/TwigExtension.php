<?php

namespace Drupal\module_name\Twig;

class TwigExtension extends \Twig_Extension {
  public function getName() {
    return 'truncate';
    // return 'gow_general.twig_extension';
  }

  public function getFilters() {
    return [
      new \Twig_SimpleFilter('truncate', array($this, 'truncateText')),
    ];
  }

  public static function truncateText($string, $limit) {
    $string = substr($string, 0, 150);
    print_r($string);
  }
}
