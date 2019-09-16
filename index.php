<?php 

    require './lib/autoload.php';


    $smarty = new Template();
    // Rotas::get_pagina();
    
    
    
    //valores para o template
    $smarty->assign('NOME', 'Hermínio Machado');
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('GET_HOME', Rotas::get_SiteHOME());
    // $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
    // $smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
    // $smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
    // $smarty->assign('TITULO_SITE', Config::SITE_NOME);
    
    // echo Rotas::get_SiteTEMA() . '<br>';
    
    
    $smarty->display('index.tpl');


?>