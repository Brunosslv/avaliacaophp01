<?php

    class Fatura{

        //atributo

        private $numero;
        private $descricao;
        private $qtdItem;
        private $precoPorItem;

        //metodos

        public function teste($numero, $descricao, $qtdItem, $precoPorItem){
            $this->numero = $numero;
            $this->descricao = $descricao;
            $this->qtdItem = $qtdItem;
            $this->precoPorItem = $precoPorItem;

            if($precoPorItem < 0){
                $precoPorItem = 0.0;
            }

        }

        public function getNumero() {
            return $this->numero;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getqtdItem() {
            return $this->qtdItem;
        }

        public function getprecoPorItem() {
            return $this->precoPorItem;
        }

        ////////METODO SET////////////////


        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }


        public function setqtdItem($qtdItem) {
            if ($qtdItem > 0) {
                $this->qtdItem = $qtdItem;
            } else {
                $this->qtdItem = 0;
            }

            $this->qtdItem = $qtdItem;
        }

        public function setprecoPorItem($precoPorItem) {
            if ($precoPorItem> 0.0) {
                $this->precoPorItem= $precoPorItem;
            } else {
                $this->precoPorItem = 0.0;
            }
            $this->precoPorItem = $precoPorItem;
        }

        public function getTotalFatura() {
            if ($this->qtdItem > 0 && $this->precoPorItem > 0.0) {
                return $this->qtdItem * $this->precoPorItem;
            } else {
                return 0.0;
            }
        }
        

        }
?>