<h3>Lista de produtos</h3>
<hr>

 
    <section id="pagincao" class="row">
       <center>
          PAGINAS
       </center>
    </section>
  
       
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
<ul style="list-style: none" >
    
    
  
                  <div class="row" id="pularliha">
             
           
        <li class="col-md-4">

            <div class="thumbnail">

                <a href="">


                    <img src="" alt="" > 

                    <div class="caption">

                        <h4 class="text-center"> NOME PROD</h4> 

                        <h3 class="text-center text-danger">VALOR</h3>

                    </div>

                </a>

            </div>


        </li>
        
         </div>
         
    
</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    PAGINAS
    </center>
    </section>








    //  PRODUTOS INFO PAGINA


     {foreach from=$PRO item=P}

      <h3 class="text-center">{$P.pro_nome}</h3>
<hr>

<div class="row">
    
  
    {*  div da esquerda imagem do produto  *}
    <div class="col-md-6 ">

        <img class="thumbnail" src="{$P.pro_img}" alt="" > 

    </div>

   
	{*    div da direita info produtos    *}
    <div class="col-md-6 thumbnail">
        
          <img src="{$TEMA}/images/logo-pagseguro.png" alt="">
  <hr>
            
        
        <div class="col-md-6">
           <h3 class="text-center preco">R$ {$P.pro_valor}</h3>   
            
        </div>
      
        <div class="col-md-6">
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-geral btn-lg">Comprar</button>
             </form> 
            
        </div>
           
         
      

     
        
    

    </div>




</div>
        <!-- -->
         {*  listagem de imagens extras  *}
        <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 

                      <li class="col-md-3 ">
                          <img src="" alt="" class="thumbnail">


                      </li>

                 
              </ul>
              

        </div>
            {*    <!-- descrição do produto-->  *}
      
        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            {$P.pro_desc} 

        </div>  
            <br>
            <br>


  {/foreach}








