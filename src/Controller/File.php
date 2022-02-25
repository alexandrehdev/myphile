<?php
namespace Fileapp\Myphile\Controller;
use Fileapp\Myphile\Controller\GetFile;
use Fileapp\Myphile\Model\File as FileModel;

class File extends GetFile
{
  public $file;

  function __construct(){
    parent::__construct();

    // $this->file = $this->getFile();
  }

  public function checkfile(){
    $response = $this->redirectfile();
    if ($response == TRUE) {
      (new FileModel())->readFile();
    }
  }

  public function redirectfile(){
    $file = $this->getFile();
    $target = __DIR__ . "/files/{$file['name']}";
    move_uploaded_file($file['tmp_name'], $target);

    return TRUE;
  }


}

 ?>
