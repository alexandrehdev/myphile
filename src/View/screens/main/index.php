<?php
  require_once("../../../../vendor/autoload.php");
  use Fileapp\Myphile\Controller\GetFile;
  use Fileapp\Myphile\Controller\File;

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    (new GetFile());
    $file = new File();
    $file->checkfile();
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
            <input draggable="true" type="file" name="userfile" id="file">
          </div>
          <div class="field">
            <input type="submit" id="btn" name="btn" value="Enviar" class="sendbutton">
          </div>
        </form>

      </div>

      <div class="hidden-table">

        <table>
          <tr>
            <th><?php echo $file->showContentFile(1)["firstr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["secondr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["thirdr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["fourthr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["fifthr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["sixthr"]; ?></th>
            <th><?php echo $file->showContentFile(1)["seventhr"]; ?></th>
          </tr>
          <tr>
            <td><?php echo $file->showContentFile(2)["firstr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["secondr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["thirdr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["fourthr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["fifthr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["sixthr"]; ?></td>
            <td><?php echo $file->showContentFile(2)["seventhr"]; ?></td>
          </tr>
          <tr>
            <td><?php echo $file->showContentFile(3)["firstr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["secondr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["thirdr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["fourthr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["fifthr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["sixthr"]; ?></td>
            <td><?php echo $file->showContentFile(3)["seventhr"]; ?></td>
          </tr>

          <tr>
            <td><?php echo $file->showContentFile(4)["firstr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["secondr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["thirdr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["fourthr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["fifthr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["sixthr"]; ?></td>
            <td><?php echo $file->showContentFile(4)["seventhr"]; ?></td>
          </tr>
        </table>

      </div>

    </main>
  </body>
</html>
