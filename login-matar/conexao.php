<?php

    
   abstract class Conexao {

    private static $instance;

    /**
     * 
     * @return PDO
     */
    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=localhost;dbname=aslogin;charset=UTF8", "aslogin", "enL2DcpezcA3TmAC");
				
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}


?>