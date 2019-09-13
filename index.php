<?php 
    require './lib/autoload.php';

    $smarty = new Smarty();

    $smarty = new Template();
    Rotas::get_pagina();

    // valores para o template
    $smarty->assign('NOME', 'Hermínio Machado');

    echo Rotas::pag_Carrinho();

    $smarty->display('index.tpl');


?>