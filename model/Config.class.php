<?php 

    Class Config{ 

        // INFORMAÇÔES BÁSICAS DO SITE
        const SITE_URL = "http://localhost";
        const SITE_PASTA = "qcursos/lojaphp7";
        const SITE_NOME = "Ecommerce - PHP7";
        const SITE_EMAIL_ADM = "git.herminio@gmail.com";

        // INFORMAÇÕES DO BANCO DE DADOS
        const BD_HOST = "localhost",
              BD_USER = "root",
              BD_SENHA = "",
              BD_BANCO = "lojaphp7";
              BD_PREFIX = "";

        // INFORMAÇÕES PARA PHP MAILLER
        const EMAIL_HOST = "smtp.gmail.com";
        const EMAIL_USER = "git.herminio@gmail.com";
        const EMAIL_NOME = "Contato Hermínio";
        const EMAIL_SENHA = " ";
        const EMAIL_PORTA = 587;
        const EMAIL_SMTPAUTH = true;
        const EMAIL_SMTPSECURE = "tls";  
        const EMAIL_COPIA = "git.herminio@gmail.com";
              

        

    }        
?>