<?php
include '../persistencia/conexaobanco.class.php';
class AgendaDAO{
    private $conexao=null;

    public function __construct(){
        $this->conexao = ConexaoBanco::getInstancia();
    }

    public function marcarHorario($mh){
        try{
            $stat = $this->conexao->prepare("insert into agenda(idCliente, nomeCliente, data, hora, tipoCorte, preco)values(null, ?, ?, ?, ?, ?) ");

            $stat->bindValue(1,$mh->nomeCliente);
            $stat->bindValue(2,$mh->data);
            $stat->bindValue(3,$mh->hora);
            $stat->bindValue(4,$mh->tipoCorte);
            $stat->bindValue(5,$mh->preco);

            $stat->execute();

            $this->conexao=null;

        }catch(PDOException $e){
            echo 'Erro ao marcar horário!';
        }//fecha o catch
    }//fecha o método

    public function buscarCliente(){
        try{
            $stat = $this->conexao->query("select * from cliente" );

            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'agenda');

            $this->conexao=null;
            return $array;

        }catch(PDOException $e){
            echo 'Erro ao buscar cliente!';
        }//fecha o catch
    }//fecha o método


}
?>