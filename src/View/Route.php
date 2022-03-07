<?php
namespace Fileapp\Myphile\View;

  class Route
  {
    public static function redirect($folder){
      header("Location: src/View/screens/{$folder}/index.php");
    }

  }


 ?>
