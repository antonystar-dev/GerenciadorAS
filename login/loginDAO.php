                                <?php

require_once 'conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario,$senha) {
        try {
            $sql = "SELECT u.usuario,p.perfil FROM usuario u
                    INNER JOIN perfil p ON (u.perfil_id = p.id)
                    WHERE usuario=? AND senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);

            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
