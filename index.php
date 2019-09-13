<?php 
    require './lib/autoload.php';

    $smarty = new Smarty();

    $smarty = new Template();
    Rotas::get_pagina();

    // valores para o template
    $smarty->assign('NOME', 'Hermínio Machado');

    $smarty->display('index.tpl');


?>