<!doctype html>

<html lang="en">
  <head>

    <style>
       input {
          width: 180px;
          border: 2px solid #E6E6E6;
          padding: 0;
          margin: 0;
          height: 22px;
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
       }

       input.submit
    {
      cursor: pointer;
      width: 22%;
      height: 3rem;
      font-size: 1rem;
    }

    /* Interação */
    input.submit:valid,
    /* cor do input */
    input.submit:focus {
      border-bottom: 2px solid #26a69a;  
    }

    input.submit:valid + label,
    input.submit:focus + label {
      color: #26a69a;
      font-size: .8rem;
      top: -30px;
      pointer-events: none;
    }

    input.submit {
      border: 0;
      border-bottom: 2px solid #9e9e9e;
      outline: none;
      transition: .2s ease-in-out;
      box-sizing: border-box;
    }
    </style>

    <!-- AQUI SÓ TEM CHADAMADAS DE ESTILO DA PÁGINA-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Behavior Generator</title>

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
    
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- AQUI ACABA OS ESTILOS-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      
      //Funções JQuery que fazem os filtros dos campos nos blocos de condição específica.
      //Essas funções também desativam e ativam campos a depender da opção selecionada.

      jQuery(document).ready(function($){
      
        
        //Aqui tem um JQuery para cada linha do bloco de condições específicas, no total são 10 (5 em cada bloco)

        $alts = $('#opcoes option');
        $('#condicao').on('change', function(event){
          var cond = this.value;
          $alts.each(function(index, el){
            if (alternativas[cond].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (cond != 'situacao'&& cond != 'setplaystep') { 
            $('#operador').hide();
            $('#opcoes').hide(); }
          else {
            $('#operador').show();
            $('#opcoes').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 
                    


          $alts1 = $('#opcoes1 option');
        $('#condicao1').on('change', function(event){
          var cond1 = this.value;
          $alts1.each(function(index, el){
            if (alternativas[cond1].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (cond1 != 'situacao'&& cond1 != 'setplaystep') { 
            $('#operador1').hide();
            $('#opcoes1').hide(); }
          else {
            $('#operador1').show();
            $('#opcoes1').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 
                     


          $alts2 = $('#opcoes2 option');
        $('#condicao2').on('change', function(event){
          var cond2 = this.value;
          $alts2.each(function(index, el){
            if (alternativas[cond2].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (cond2 != 'situacao'&& cond2 != 'setplaystep') { 
            $('#operador2').hide();
            $('#opcoes2').hide(); }
          else {
            $('#operador2').show();
            $('#opcoes2').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 
                     


          $alts3 = $('#opcoes3 option');
        $('#condicao3').on('change', function(event){
          var cond3 = this.value;
          $alts3.each(function(index, el){
            if (alternativas[cond3].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (cond3 != 'situacao'&& cond3 != 'setplaystep') { 
            $('#operador3').hide();
            $('#opcoes3').hide(); }
          else {
            $('#operador3').show();
            $('#opcoes3').show(); }
        }).change(); //  Executa o método change uma vez para desabilitar 
                     


          $alts4 = $('#opcoes4 option');
        $('#condicao4').on('change', function(event){
          var cond4 = this.value;
          $alts4.each(function(index, el){
            if (alternativas[cond4].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (cond4 != 'situacao'&& cond4 != 'setplaystep') { 
            $('#operador4').hide();
            $('#opcoes4').hide(); }
          else {
            $('#operador4').show();
            $('#opcoes4').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 






      });  

    </script>

  </head>

  <body>
    <?php
    //Declaração das funções que imprimem as linhas dos blocos de condições específicas:
    // # A função BlocoUm imprime 4 linhas de condição específicas no bloco 1
    // # A função BlocoDois imprime 4 linhas de condição específica no bloco 2

    function BlocoUm_ImprimeCondicoesEspecificas(){
      $count=1;

      for ($count=1;$count<=4;$count++) {
        $prox=$count+1;
        echo"
        <div class='esp1_".$count."' id='esp1_".$count."' >
          <div class = 'metodo'>
        
          <input type='text' name='method".$count."' id='method".$count."'>

          <input class='btn waves-effect waves-light col l10 offset-l1 grey' type=button value='Attributes' onclick=\"location.href='attributes.php'\">
          &ensp;<img src='img/editar4.png' onclick=\"location.href='edit.php'\" width='16' height='16'>
          &ensp;<img src='img/add2.png' onclick=\"add('esp1_".$prox."');\" width='16' height='16'>
          &ensp;<img src='img/remove3.png' onclick=\"remove('esp1_".$count."');\" width='16' height='16'>
          
          <imput type='text' id='valor".$count."' value='".$count."' hidden>

          </div>
          </div>";
      } 
    } 

   
  
  //Final da declaração das funções de impressão das linhas dos dois blocos de condição específica.
  ?>


    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll dl-color-text--grey-600">
      <div class="mdl-layout__header-row">

        <span class="mdl-layout-title">Behavior Generator</span>
        
      </div>
    </header>
    <div class = "fancy">
    <div class="demo-crumbs mdl-color-text--grey-600">      

     

  
  <div class = "fancyFormRight2"><!-- ESSA DIV SÓ DÁ UM DESCONTO PARA ALINHAR MELHOR AS OUTRAS DIVS -->
  </div>
  
  <font color="#2C6452">&nbsp;<br>&nbsp;Behavior Clang Methods

    <div class = "fancy6">
      <div class = "margem">
      
      <!-- IMPRESSÃO DA PRIMEIRA LINHA DO BLOCO 1 DE CONDIÇÕES ESPECÍFICAS. AS 4 LINHAS SEGUINTES
           DESSE BLOCO SÃO IMPRESSAS NO LOOP DA FUNÇÃO BlocoUm_ImprimeCondicoesEspecificas(); -->
      <!--<div class = "fancy3">-->
      
        
        
        <input type="text" name="method" id="method" value=" parse">
        
        <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Attributes" onclick="location.href='attributesA.php'">
        &ensp;<img src="img/editar4.png" width="16" height="16" onclick="location.href='editA.php'">
        &ensp;<img src="img/add2.png" onclick="add('esp1_1');" width="16" height="16">
<p>
         <input type="text" name="method" id="method" value=" print">
        
        <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Attributes" onclick="location.href='attributesB.php'">
        &ensp;<img src="img/editar4.png" width="16" height="16" onclick="location.href='editB.php'">
        &ensp;<img src="img/add2.png" onclick="add('esp1_1');" width="16" height="16">
        &ensp;<img src='img/remove3.png' onclick=\"remove('esp1_".$count."');\" width='16' height='16'>
<br>
         <input type="text" name="method" id="method" value=" printPretty">
        
        <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Attributes" onclick="location.href='attributesC.php'">
        &ensp;<img src="img/editar4.png" width="16" height="16" onclick="location.href='editC.php'">
        &ensp;<img src="img/add2.png" onclick="add('esp1_1');" width="16" height="16">
        &ensp;<img src='img/remove3.png' onclick=\"remove('esp1_".$count."');\" width='16' height='16'>

        
    
      <!--</div>-->
      
      <?php BlocoUm_ImprimeCondicoesEspecificas(); ?>
      </div>
    </div>



   
  

    <!-- BOTÕES DE MANUAL E SUBMIT (GERAR) -->
    <center>
      <div class="bottom2">
        <input class="submit" type=submit value="Run">
        <input class="submit" type=submit value="Generate">
        <input class="submit" type=submit value="Git">
        <input class="submit" type=button value="Manual" onclick="location.href='manual/manual.php'">
      </div>
    </center>

  </form>
  
  </div>
  </div>
  </div>
  <footer class="demo-footer mdl-mini-footer">
  </footer>
  </div>
    

  <script type="text/javascript">
    //AQUI È O MECANISMO QUE FAZ OS BOTÕES ADD E REMOVE DAS LINHAS FUNCIONAREM ISSO OCORRE ATRAVÉS
    //DO onclick.

    function add(id) {
      $("#"+id).show();
    }

    function remove(id) {
     $("#"+id).hide();
    }

  </script> 

  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

