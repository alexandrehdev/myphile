<?php
  require_once("../../../../vendor/autoload.php");
  use Fileapp\Myphile\Controller\GetFile;
  use Fileapp\Myphile\Controller\File;

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    (new GetFile());
    $file = new File();
    $response = $file->checkfile();
    $total = $file->countingFile();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/elements.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div class="inner-header">
      <div class="github-icon">
        <a href="https://github.com/alexandrehdev" target="_blank">
          <i class="github icon" class="icon"></i>
        </a>
      </div>
      <div class="information-creator">
        <i class="info icon" class="icon"></i>
      </div>
    </div>

    <header class="main-header">
      <div class="header-content">
        <h1>myPhile</h1>
      </div>
    </header>

    <main>

      <div class="file-content">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
          <div class="field">
            <label for='selecao-arquivo' id="file-text">Arquivo &#187;</label>
            <input id='selecao-arquivo' name="userfile" type='file'>
          </div>
          <div class="field">
            <input type="submit" id="btn" name="btn" value="Enviar" class="sendbutton">
          </div>
        </form>
      </div>
      <div class="table-content">
      <table>
        <tr>
            <?php for ($i=0; $i <= $total ; $i++) {
              $coluna = $file->convertNumber2Letter($i);
              $valor = $file->showcontentfile($coluna,1);

              // var dump ele retorna o objeto
              // echo $valor;
              echo "<th>{$valor}</th>";
            }
            ?>
        </tr>
        <tr>
            <?php for ($i=0; $i <= $total ; $i++) {
              $coluna = $file->convertNumber2Letter($i);
              $valor = $file->showcontentfile($coluna,2);
              // var dump ele retorna o objeto
              // echo $valor;
              echo "<td>{$valor}</td>";
            }
            ?>
          </tr>
       </table>
     </div>

    </main>
  </body>
</html>
