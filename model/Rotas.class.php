<?php  

    Class Rotas{

        public static $pag;
        private static $pasta_controller ='controller';
        private static $pasta_view = 'view';
        // 
        static function get_SiteHOME(){

            return Config::SITE_URL . '/' .Config::SITE_PASTA;
        }
        // 
        static function get_SiteRAIZ(){

            return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
        }
        // 
        static function get_SiteTEMA(){

            return self::get_SiteHOME() . '/' .self::$pasta_view;
        }
        // 
        static function pag_Carrinho(){

            return self::get_SiteHOME() . '/carrinho';
        }  
        // 
        static function pag_Contato(){

            return self::get_SiteHOME() . '/contatos';
        }  
        // 
        static function pag_MinhaConta(){

            return self::get_SiteHOME() . '/minhaconta';
        }                        

        // 
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