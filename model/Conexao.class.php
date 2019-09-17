<?php

    Class Conexao extends Config{

        private $host, $user, $senha, $banco;

        function __construct(){

            $this->host = self::BD_HOST;
            $this->user = self::BD_USER;
            $this->senha = self::BD_SENHA;
            $this->banco = self::BD_BANCO;
            $this->prefix = self::BD_PREFIX;

            // OU

            // $this->host = $this->BD_HOST;
            // $this->user = $this->BD_USER;
            // $this->senha = $this->BD_SENHA;
            // $this->banco = $this->BD_BANCO;
            // $this->prefix = $this->BD_PREFIX;

        }
        
        // Chamada para a conexão
        private function Conectar(){
            
            $link = new PDO("mysql:host={$this->host}; dbname={$this->banco}",
                $this->user, $this->senha);
        }


    }





?>