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
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z'
      );

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

  public function convertNumber2Letter(int $number){
    $tmp = null;

    foreach ($this->rowcount as $key => $value) {
      if ($number == $key) {
        $tmp = $value;
        continue; //não deixa ir ate o fim
      }
    }
    return $tmp;
  }

  public function countingFile(){
    $response = $this->checkfile(); //armazenado o valor na variavel
    $maxcolumn = $response->getActiveSheet()->getHighestColumn();
    $data = array_search($maxcolumn, $this->rowcount);
    return $data;
  }

  public function showcontentfile($letter,$num){
    $response = $this->checkfile();
    $datafile = $response->getActiveSheet()->getCell("{$letter}".$num);
    return $datafile;
  }


  public function redirectfile(){
    // $file = $this->getFile();
    $target = __DIR__ . "/../Model/files/{$_SESSION['CURRENT_FILE']['name']}";
    move_uploaded_file($_SESSION['CURRENT_FILE']['tmp_name'], $target);

    return TRUE;
  }


}

 ?>
