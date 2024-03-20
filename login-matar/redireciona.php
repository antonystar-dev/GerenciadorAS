
<?php

session_start();
include 'validaLogin.php';

$destinatario = "sac@antonystar.com";
$email = "sac@webportalcursos.com";
$ip = $_SERVER['REMOTE_ADDR'];
$sistemaoperacional = $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set('America/Sao_Paulo');
$dataehora = date('d/m/Y \à\s H:i:s');
echo $assunto = "Verificou-se um login no $sistemaoperacional na data e hora: $dataehora, com o endereço de IP: $ip";

$body = "===================================" . "\n";
$body = $body . "Alerta de Login" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Usuario: " . $_SESSION["usuario"] . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $assunto . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
//mail($destinatario, $assunto, $body, "From: $email\r\n");
?> 

<?php

switch ($_SESSION["perfil"]) {
    case "administrador":
        header("Location: ../admin");
        break;
    case "Usuario":
        header("Location:../View/menu.php");
        break;
    default:
        header("Location:../view/index.php");
}
?>
               