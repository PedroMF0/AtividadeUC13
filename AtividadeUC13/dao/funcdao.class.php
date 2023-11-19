<?php
include_once '../persistencia/conexaobanco.class.php';

class FuncionarioDAO {
    private $conexao = null;

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    public function verificarBarbeiro($b) {
        try {
            $stat = $this->conexao->prepare("SELECT * FROM barbeiros WHERE nomeBarbeiro = ? AND senha = ?");
            $stat->bindValue(1, $b->nomeBarbeiro);
            $stat->bindValue(2, $b->senha);
            $stat->execute();

            $barbeiro = $stat->fetchObject('Barbeiro');
            return $barbeiro;
        } catch (PDOException $e) {
            throw new Exception('Erro ao verificar barbeiro!', 0, $e);
        }
    }

    public function cadastrarBarbeiro($barb) {
        try {
            $stat = $this->conexao->prepare("INSERT INTO barbeiros(nomeBarbeiro, senha) VALUES (?, ?)");
            $stat->bindValue(1, $barb->nomeBarbeiro);
            $stat->bindValue(2, $barb->senha);
            $stat->execute();

            // Encerrando a conexão
            $this->conexao = null;
        } catch (PDOException $e) {
            throw new Exception('Erro ao cadastrar barbeiro!', 0, $e);
        }
    }
}

?>
