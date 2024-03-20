<?php

session_start();
include '../login/validaLogin.php';
$linkUnico=1;
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
  
       <?php

        include '../menu.php';

    ?>
  
  <br><br><br><br><br><br>
  <?php
        // pega a partir do request a pagina que escolhermos
        include("./banco/config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-link.php");
            break;
          case "listar":
            include("lista-link.php");
            break;
            case "salvar":
            include("salvar-link.php");
            break;
            case "editar":
              include("editar-link.php");
              break;
              case "busca":
                include("relatorio.php");
                break;
                
      
          default:
          include("relatorio.php");
        }
        ?>
</body>

</html>