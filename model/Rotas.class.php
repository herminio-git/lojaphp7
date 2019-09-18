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
        static function get_ImagePasta(){

           return 'media/img/'; 

        }
        //
        static function get_ImageURL(){

            return self::get_SiteHOME(). '/' . self::get_ImagePasta();

        }
        // 
        static function ImageLink($img, $largura, $altura){

            $imagem = self::get_ImageURL(). "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";

            return $imagem;
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