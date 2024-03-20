<?php

session_start();
require_once 'loginDAO.php';

$usuario = $_POST["usuario"];
$user=$usuario;
//$senha = md5($_POST["senha"]);
$senha = $_POST["senha"];
$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION["usuario"] = $usuario["usuario"];
    $_SESSION["perfil"] = $usuario["perfil"];
    echo "<script>";
    echo "window.location.href = 'redireciona.php';";
    echo "</script> ";
} else {
    $destinatario = "sac@antonystar.com";
    $email = "sac@webportalcursos.com";
    $ip = $_SERVER['REMOTE_ADDR'];
    $sistemaoperacional = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set('America/Sao_Paulo');
    $dataehora = date('d/m/Y \à\s H:i:s');
    $assunto = "Verificou-se uma tentativa de login com o $sistemaoperacional na data e hora: $dataehora, com o endereço de IP: $ip";

    $body = "===================================" . "\n";
    $body = $body . "Tentativa falha de Login" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Usuario: " . $user . "\n";
    $body = $body . "Senha: " . $senha . "\n";
    $body = $body . "Email: " . $email . "\n";
    $body = $body . " " . $assunto . "\n\n";
    $body = $body . "===================================" . "\n";

// envia o email
    //mail($destinatario, $assunto, $body, "From: $email\r\n");

    $msg = "Usuário e/ou senha invalido";
    echo "<script>";
    echo "window.location.href = '../view/index.php?msg={$msg}';";
    echo "</script> ";
}
?>
