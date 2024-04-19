<?php

    class Empregado{

            private $nome;
            private $sobrenome;
            private $salarioMensal;
        
            // Métodos get e set para cada atributo
            public function getNome() {
                return $this->nome;
            }
        
            
            public function getSobrenome() {
                return $this->sobrenome;
            }
            
            public function getSalarioMensal() {
                return $this->salarioMensal;
            }
                
        
            public function setNome($nome) {
                $this->nome = $nome;
            }
            
            public function setSobrenome($sobrenome) {
                    $this->sobrenome = $sobrenome;
            }
                
            public function setSalarioMensal($salarioMensal) {
                    $this->salarioMensal = $salarioMensal;
            }
                
            public function recebaAumento($porcentagem) {
                $this->salarioMensal += $this->salarioMensal * ($porcentagem / 100);
            }
    
            public function getSalarioAnual() {
                return $this->salarioMensal * 12;
            }
        }
            




?>