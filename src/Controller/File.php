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
  // verifica o arquivo enviado
  public function checkfile(){
    $_SESSION['CURRENT_FILE'] = $this->getFile(); //armazenado o arquivo em sessão
    $response = $this->redirectfile(); //redireciona o arquivo para pasta files
      if ($response == TRUE) { //caso tenha dado certo, ele irá retornar true
        return (new FileModel())->readFile($_SESSION['CURRENT_FILE']);
        //retornando true ele irá retornar o arquivo lido
    }
  }

  public function countingFile(){
    $response = $this->checkfile($_SESSION['CURRENT_FILE']); //armazenado o valor na variavel
    $maxcolumn = $response->getActiveSheet()->getHighestColumn();
    $data = array_search($maxcolumn, $this->rowcount);
    return $data;
  }

  public function showAllColumns(){
    return $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
  }

  public function showRowCount(){
    $rowcount = array(1 =>'A', 2 =>'B',3 =>'C',4 =>'D',5 =>'E',6 =>'F',7 =>'G',8 =>'H',9 =>'I',10 =>'J',11 =>'K',12 =>'L',13 =>'M',
      14 =>'N',15 =>'O',16 =>'P',17 =>'Q',18 =>'R',19 =>'S',20 =>'T',21 =>'U',22 =>'V',23 =>'W',24 =>'X',25 =>'Y', 26 =>'Z');
      return $rowcount;
  }

  public function redirectfile(){
    // $file = $this->getFile();
    $target = __DIR__ . "/../Model/files/{$_SESSION['CURRENT_FILE']['name']}";
    move_uploaded_file($_SESSION['CURRENT_FILE']['tmp_name'], $target);

    return TRUE;
  }




}

 ?>
