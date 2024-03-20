<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="loginController.php" method="post" id="formlogin">

            <label>Usuário:</label><br>
            <input class="dados" type="text" name="usuario"/><br>

            <label>Senha:</label><br>
            <input class="dados" type="password" name="senha"/><br>

            <input type="submit" class="bot" value="Entrar"/>


        </form> 
    
</center>
<center>
    <?php
    if (!empty($_GET["msg"])) {
        echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
    }
    ?>
</center>
</body>
</html>