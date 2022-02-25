<?php
namespace Fileapp\Myphile\Controller;
use Fileapp\Myphile\Controller\GetFile;
use Fileapp\Myphile\Model\File as FileModel;

session_name("xfile");
session_start();

class File extends GetFile
{
  public $file;

  function __construct(){
    parent::__construct();
  }

  public function checkfile(){
    $_SESSION['CURRENT_FILE'] = $this->getFile();
    $response = $this->redirectfile();
    if ($response == TRUE) {
      (new FileModel())->readFile($_SESSION['CURRENT_FILE']);
    }
  }

  public function redirectfile(){
    // $file = $this->getFile();
    $target = __DIR__ . "/../Model/files/{$_SESSION['CURRENT_FILE']['name']}";
    move_uploaded_file($_SESSION['CURRENT_FILE']['tmp_name'], $target);

    return TRUE;
  }


}

 ?>
