<?php
include_once '../persistencia/conexaobanco.class.php';

class AgendaDAO {
    private $conexao = null;

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    public function marcarHorario($mh) {
        try {
            $stat = $this->conexao->prepare("INSERT INTO agenda(nomeCliente, data_hora, tipoCorte) VALUES (?, ?, ?)");
            $stat->bindValue(1, $mh->nomeCliente);
            $stat->bindValue(2, $mh->data_hora);
            $stat->bindValue(3, $mh->tipoCorte);
            $stat->execute();
        } catch (PDOException $e) {
            throw new Exception('Erro ao marcar horário!', 0, $e);
        }
    }

    public function buscarCliente(){
        try{
            $stat = $this->conexao->query("SELECT * FROM agenda");

            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Agenda');

            return $array;

        } catch(PDOException $e) {
            throw new Exception('Erro ao buscar cliente!', 0, $e);
        }
    }

    public function deletarCliente($idCliente){
        try{
            $stat = $this->conexao->prepare("delete from agenda where idCliente = ?");

            $stat->bindValue(1,$idCliente);
            $stat->execute();
            
            $this->conexao=null;
        }catch(PDOException $e){
            echo 'Erro ao deletar cliente!';
        }//fecha o catch
    }//fecha o método

    
    public function buscar($query){
        try{
            $stat = $this->conexao->query("select * from agenda ".$query);
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'agenda');
            $this->conexao = null;
            return $array;
        }catch(PDOException $e){
            echo 'Erro ao buscar com filtro!';
        }

    }//fecha o método

    public function alterarCliente($age){
        try{
            $stat = $this->conexao->prepare('UPDATE agenda SET nomeCliente = ?, data_hora = ?, tipoCorte = ? WHERE idCliente = ?');
            $stat->bindValue(1, $age->nomeCliente);
            $stat->bindValue(2, $age->data_hora);
            $stat->bindValue(3, $age->tipoCorte);
            $stat->bindValue(4, $age->idCliente);

            $stat->execute();

        } catch(PDOException $e) {
            throw new Exception('Erro ao alterar cliente!', 0, $e);
        }
    }

}
?>