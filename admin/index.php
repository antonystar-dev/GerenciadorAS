<?php

session_start();
include '../login/validaLogin.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud</title>
  <!--Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>

<body>
  <div class="menu">
    <a class="nav-link active" href="?page=page">Acessos</a>
    <a class="nav-link" href="?page=novo">Novo link</a>
    <a class="nav-link" href="?page=listar">Listar links</a>
    <?php

        include '../menu.php';

    ?>
  </div>
  <br><br><br><br><br><br>
  <?php
        // pega a partir do request a pagina que escolhermos
        include("config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-link.php");
            break;
          case "listar":
            include("lista-link.php");
            break;
            case "salvar":
            include("salvar-link.php");
            case "editar":
              include("editar-link.php");
              case "busca":
                include("relatorio.php");
          default:
          include("relatorio.php");
        }
        ?>
</body>

</html>