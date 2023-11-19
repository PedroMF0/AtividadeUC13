<?php
class ConexaoBanco extends PDO {
    private static $instancia = null;

    public function __construct($dsn, $usuario, $senha) {
        // Chamar o construtor pai do PDO
        parent::__construct($dsn, $usuario, $senha);
    }

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            try {
                /* Cria e retorna uma nova conexão */
                self::$instancia = new ConexaoBanco("mysql:dbname=barbeiro;host=localhost", "root", "");
            } catch (Exception $e) {
                echo 'Erro ao conectar';
                exit();
            }
        }
        return self::$instancia;
    }
}
?>
