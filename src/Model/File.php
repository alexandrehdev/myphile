<?php
namespace Fileapp\Myphile\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use Fileapp\Myphile\Controller\File as FileController;

// session_name("xfile");
// session_start();

class File extends FileController
{
  public $reader;

  function __construct(){
    parent::__construct();

    $this->reader = new Csv();
  }

  public function readFile($file){

    $spreadsheet = $this->reader->load(__DIR__ . "/files/{$file['name']}");
    var_dump($spreadsheet);
  }
}


 ?>
