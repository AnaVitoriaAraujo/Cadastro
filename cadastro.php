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

        public function imprimir(){
            $msg = "\n\nCPF:".$this->getCPF().
                    "\nNome: ".$this->getNome().
                    "\nTelefone: ".$this->getTelefone().
                    "\nEndereco: ".$this->getEndereco().
                    "\nCidade: ".$this->getCidade();
            return $msg;
        }//fim do metodo

        public function excluir(){
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados Excluidos!";
        }//fim do metodo


        public function menu(){
            $men = "\n Escolha o que deseja atuaizar: ".
                    "\n. Nome".
                    "\n. Telefone".
                    "\n. Endereco".
                    "\n. Cidade";
            return $men;
        }//fim do metodo

        public function atualizar($opcao, $dado){

            switch($opcao){
                
                    case 1: 
                        $this->setNome($dado);
                        break;

                    case 2:
                        $this->setTelefone($dado);
                        break;
                    case 3:
                        $this->setEndereco($dado);
                        break;
                    case 4:
                        $this->setCidade($dado);
                        break;

                    default:
                    return "Opção escolhida não é valida";
                 
            }//fim do escola 
        }//fim do metodo

    }//fim da classe
?>