<?php
  namespace Fileapp\Myphile\Controller;

  class GetFile
  {
    private $file;

    function __construct(){
      $this->setFile($_FILES['userfile']);
    }

    public function getFile(){
      return $this->file;
    }
    public function setFile($file){
      $this->file = $file;
    }
  }

 ?>
