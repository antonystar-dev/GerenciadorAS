<div class="menu" id="menuPrincipal">
            
        
            <div id="menuCelular" class="menu-centro">
                <div class="item-menu"><a href="?page=page" onclick=pgAdminView()>Acessos</a>
                    <hr class="hr-menu">
                </div>
                <div class="item-menu"><a href="#" onclick=pgAdmin()>Usuarios</a>
                    <hr class="hr-menu">
                </div>
                <div class="item-menu"><a href="?page=novo" onclick=pgAdminView()>Novo link</a>
                    <hr class="hr-menu">
                </div>
                <div class="item-menu"><a href="?page=listar" onclick=pgAdminView()>Listar links</a>
                    <hr class="hr-menu">
                </div>
               
                <?php

       
$seçãoPerfilcol = null;
if (!empty($_SESSION["perfilcol"])) {
    $seçãoPerfilcol = $_SESSION["perfilcol"];
}
switch ($seçãoPerfilcol) {
    case "Administrador":
        echo'<button onclick=pgPerfil() >Perfil</button>';
        echo'<a href="./controller/logoffController.php"><button>Sair</button></a>';
        break;
    case "Usuario":
        echo'<button onclick=pgPerfil()>Perfil</button>';
        echo'<a href="./controller/logoffController.php"><button>Sair</button></a>';
        break;
        default:
        echo'<button onclick=login()>Entrar</button>';
        echo'<button onclick=cadastrar()>Cadastrar</button>';
    }

?>
            </div>
        
        
        </div>
        <div id="alertaPositivoID">
    
    </div>
    <div id="alertaNegativoID">
        
    </div>
    
    <div id="alertas">
        
    </div>

