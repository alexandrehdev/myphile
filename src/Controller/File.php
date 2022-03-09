<?php
namespace Fileapp\Myphile\Controller;
use Fileapp\Myphile\Controller\GetFile;
use Fileapp\Myphile\Model\File as FileModel;

session_name("xfile");
session_start();

class File extends GetFile
{
  public $file;

  public $rowcount = array(
        'A' => 1,
        'B'=>  2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'L' => 12,
        'M' => 13,
        'N' => 14,
        'O' => 15,
        'P' => 16,
        'Q' => 17,
        'R' => 18,
        'S' => 19,
        'T' => 20,
        'U' => 21,
        'V' => 22,
        'W' => 23,
        'X' => 24,
        'Y' => 25,
        'Z' => 26
      );

  function __construct(){
    parent::__construct();
  }
  // verifica o arquivo enviado
  public function checkFile(){
    $_SESSION['CURRENT_FILE'] = $this->getFile(); //armazenado o arquivo em sessão
    $response = $this->redirectFile(); //redireciona o arquivo para pasta files
      if ($response == TRUE) { //caso tenha dado certo, ele irá retornar true
        return (new FileModel())->readFile($_SESSION['CURRENT_FILE']);
        //retornando true ele irá retornar o arquivo lido
    }
  }
  public function countingFile(){
    $response = $this->checkfile(); //armazenado o valor na variavel
    $maxcolumn = $response->getActiveSheet()->getHighestColumn();
    // $data = array_search($maxcolumn, $this->rowcount);
    return $maxcolumn;
  }

  public function number2Letter($number){
    $tmp = null;
    foreach ($this->rowcount as $key => $value) {
      if ($number == $value) {
        $tmp = $key;
        continue;
      }
    }
    return $tmp;
  }

  public function showContentFile($letter,$num){
    $response = $this->checkfile();
    $datafile = $response->getActiveSheet()->getCell("{$letter}".$num);
    return $datafile;
  }

  public function redirectFile(){
    // $file = $this->getFile();
    $target = __DIR__ . "/../Model/files/{$_SESSION['CURRENT_FILE']['name']}";
    move_uploaded_file($_SESSION['CURRENT_FILE']['tmp_name'], $target);

    return TRUE;
  }


}

 ?>
