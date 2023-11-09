<?php
    class Agenda{
        //Atributos
        private $idCliente;
        private $nomeCliente;
        private $data;
        private $hora;
        private $tipoCorte;

        //Construtor
        public function __construct(){
            

        }//fecha o construtor

        public function Agenda(){

        }

        public function __get($atrib) {
            return $this->$atrib;
        }

        public function __set($atrib, $valor) {
            $this->$atrib = $valor;
        }

        public function __toString(){
            return '<br>Código: '.$this->idCliente. 
                   '<br>Nome: '.$this->nomeCliente. 
                   '<br>Data: '.$this->hora.
                   '<br>Hora: '.$this->data.
                   '<br>Tipo de Corte: '.$this->tipoCorte; 
        }
    }//fecha a classe Usuario
?>