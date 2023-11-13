<?php
//classe de cadastro

    class Cadastro{
        //Declaração de variacveis
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;

        public function __construct($cpf,$nome, $telefone, $endereco, $cidade){
            $this->setCPF($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }//fim do construtor

        //metodos modificadores e de consulta
        public function getCPF(){
            return $this->cpf;
        }//fim do métodol
        
        public function getNome(){
            return $this->nome;

        }//fim do nome

        public function getTelefone(){
            return $this->telefone;

        }//fim do telefone

        public function getEndereco(){
            return $this->endereco;

        }//fim do endereco

        public function getCidade(){
            return $this->cidade;

        }//fim do cidade

        public function setCPF($cpf){
            return $this->cpf = $cpf;

        }//fim do cpf


        public function setNome($nome){
            return $this->nome = $nome;
        }

        public function setTelefone($telefone){
            return $this->telefone = $telefone;

        }

        public function setEndereco($endereco){
            return $this->endereco = $endereco;
        }

        public function setCidade($cidade){
            return $this->cidade = $cidade;
        }

        public function excluuir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados Excluidos!";
        }//fim do metodo

        public function imprimir(){
            $msg = "\n\nCPF:".$this->getCPF().
                    "\nNome: ".$this->getNome().
                    "\nTelefone: ".$this->getTelefone().
                    "\nEndereco: ".$this->getEndereco().
                    "\nCidade: ".$this->getCidade();
            return $msg;
        }//fim do metodo

        session_start();
        $cpf = $_SESSION['cpf'];
        $nome = $_SESSION['nome'];
        $tele = $_SESSION['telefone'];
        $end = $_SESSION['endereco'];
        $cid = $_SESSION['cidade'];


        

       

    }//fim da classe
?>