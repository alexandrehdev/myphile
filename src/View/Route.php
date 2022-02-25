<?php
namespace Fileapp\Myphile\View;

  class Route
  {
    static function redirect($folder){
      header("Location: src/View/screens/{$folder}/index.php");
    }

  }


 ?>
