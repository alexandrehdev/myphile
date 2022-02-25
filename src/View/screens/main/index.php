<?php
  require_once("../../../../vendor/autoload.php");
  use Fileapp\Myphile\Controller\GetFile;
  use Fileapp\Myphile\Controller\File;

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    (new GetFile());
    (new File())->checkfile();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/elements.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div class="inner-header">
      <div class="github-icon">
        icone github
      </div>
      <div class="information-creator">
        link para informação pessoal
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
            <input draggable="true" type="file" name="userfile" id="file">
          </div>
          <div class="field">
            <input type="submit" id="btn" name="btn" value="Enviar" class="sendbutton">
          </div>
        </form>

        </div>
    </main>
  </body>
</html>
