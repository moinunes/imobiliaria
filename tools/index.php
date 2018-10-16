<?php
session_start();
include_once 'tools.php';



if ( !isset( $_SESSION['login'] ) ) {   
   $host  = $_SERVER['HTTP_HOST'].'/imobiliaria/tools/login.php';   
   header("Location: http://$host");
}



?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
   <title>Imobiliaria</title>

   <meta charset="utf-8">   
   <meta name="keywords" content="imobiliaria,imóvel,imóveis,apartamentos,casas,compra,venda,santos, são vicente,"/>
   <meta name="description" content="Escolha seu imóvel na baixada santista.">   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap styles -->
   <link rel="stylesheet" href="../dist/bootstrap-4.1/css/bootstrap.min.css">
     
     <!-- estilo.css -->  
   <link rel="stylesheet" href="../dist/css/estilo.css" >
   
</head>

<body>

   <header>
      <?php include_once 'cabecalho_tools.php';?>
  
      <div class="row fundo_cinza_1">
         <div class="col-0 col-sm-0 col-md-0 col-lg-1 col-xl-1">   
             
         </div>
         <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 text-center">   
             <a class="btn btn-outline-success btn_link" href="cadastro_imovel.php?acao=alteracao&comportamento=exibir_listagem" role="button"><img src="../images/casa.svg"> Imóvel</a>
         </div>
         <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center">
             <a class="btn btn-outline-success btn_link" href="cadastro_tipo.php?acao=alteracao&comportamento=exibir_listagem" role="button"><img src="../images/tipo.svg"> Tipo</a>
         </div>
         <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 text-center">
             <a class="btn btn-outline-success btn_link" href="cadastro_cep.php?acao=alteracao&comportamento=exibir_listagem" role="button"><img src="../images/mail.svg"> CEP</a>
         </div>
         <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
             <a class="btn btn-outline-success btn_link" href="login.php?acao=logout&comportamento=vazio" role="button"><img src="../images/sair.svg"> Sair</a>
         </div>        
         
      </div>   

   </header>  



   <div class="container">
      
      <div class="row">
         <div class="col-md-12">
            <br>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <span class="font_cinza_g text-righ">Essa é a tela de manutenção dos cadastros do SITE</span>
            <br><br>
            <a href="cadastro_imovel.php?acao=inclusao&comportamento=exibir_formulario&frm_imovel=0">Incluir um IMÓVEL</a>
            <br><br>
            <a href="cadastro_imovel.php?acao=alteracao&comportamento=exibir_listagem">Alterar um IMÓVEL</a>
         </div>
      </div>
      

      
   </div> <!-- container -->

   <footer class="fixed-bottom">
      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-light cor_verde">
               <a target="_blank" class="btn btn-outline-success btn_link" href="/imobiliaria/" role="button">Abrir o Site</a>
            </nav>
         </div>
      </div> 
   </footer>


   <!--  -->
   <script src="../dist/js/load-image/load-image.all.min.js"></script>
   <script src="../dist/js/jquery-3.3.1.min.js"></script>
   <script src="../dist/js/upload.js"></script>


   <script type="text/javascript">
     
   </script>     
   

</body>

</html>
