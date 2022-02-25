<?php
namespace Fileapp\Myphile\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use Fileapp\Myphile\Controller\File as FileController;

class File extends FileController
{
  public $reader;

  function __construct(){
    parent::__construct();

    $this->reader = new Csv();
  }

  public function readFile($file){
    $this->reader->setInputEncoding('CP1252');

  }
}


 ?>
