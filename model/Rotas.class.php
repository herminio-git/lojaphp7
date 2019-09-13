<?php  

    Class Rotas{

        public static $pag;

        static function get_Pagina(){
            if(isset($_GET['pag'])){

                // Variável "$pagina" recebe "$_GET" (digitado/linkado na url)
                $pagina = $_GET['pag'];

                // "self::" se equivale a "$this"
                self::$pag = explode('/', $pagina);

                // Faz a verificação se existe a página na pasta controller
                $pagina = 'controller/' . self::$pag[0] .'.php';
                // $pagina = 'controller/' .$_GET['pag'].'.php';

                if(file_exists($pagina)){
                    include $pagina;

                }else{
                    include 'erro.html';
                }
            }        
        }
    }


?>