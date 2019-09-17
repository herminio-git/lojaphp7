<?php 

    $smarty = new Template();

    $produtos = new Produtos();
    $produtos->GetProdutos();

   

    $smarty->display('produtos.tpl');

    echo '<pre>';
    var_dump($produtos->GetItens());
    echo '</pre>';
    
?>