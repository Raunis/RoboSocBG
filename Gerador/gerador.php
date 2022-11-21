<html lang="en">
  <head>
    <script src="plugin/jquery/3.5.1/jquery.min.js"></script>
    <script src="plugin/bootstrap/3.4.1/bootstrap.min.js"></script>
    
    <script src="plugin/jquery/1.11.1/jquery.min.js"></script>

    <?php
      include "caminho.php";

      $result=caminho();
      //ACCESS TEST
      if (isset($_SESSION['splanner'])) {
      @
      $planner = fopen('../../'.$_SESSION['splanner'].'/setPlayGUI/spaction.h','r+');

      if ($planner) {
        fclose($planner); 
         //Backup SPlanner
         //Please, uncomment this line if you want to make a copy of the Slanner before changing it.
         //exec('bash ./copia.sh');    
     

      


    ?>

    <!-- AQUI SÓ TEM CHADAMADAS DE ESTILO DA PÁGINA-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Behavior Generator</title>

    <meta name="mobile-web-app-capable" content="yes">
    

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
    
    
    <meta name="msapplication-TileColor" content="#3372DF">

    <!--<link rel="shortcut icon" href="images/favicon.png">
      <link rel="icon" sizes="192x192" href="images/android-desktop.png">
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/component.css" />
    <link rel="stylesheet" href="css/toolips.css" />

    <!-- AQUI ACABA OS ESTILOS-->


    
     <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    -->

    <script src="plugin/jquery/3.5.1/jquery.min.js"></script>
    <script src="plugin/bootstrap/3.4.1/bootstrap.min.js"></script>
    <script src="plugin/jquery/1.11.1/jquery.min.js"></script>
    
    <script>
      
      //Funções JQuery que fazem os filtros dos campos nos blocos de condição específica.
      //Essas funções também desativam e ativam campos a depender da opção selecionada.

      jQuery(document).ready(function($){
      
        // Objeto com as relações de opções disponíveis no primeiro comboBox e suas respectivas opções
        var alternativas = {
          selecione: ['selecione'],
          setplaystep: ['selecione', '0'],
          situacao: ['selecione', 'play_on', 'kick_off', 'throw_in', 'dir_free_kick','ind_free_kick','corner_kick','goal_kick','keeper_catch'],
          bolaParada: [''],
          situacaoEspecial: ['']

        }
        
        
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



          $altsIn = $('#opcoesIn option');
        $('#condicaoIn').on('change', function(event){
          var condIn = this.value;
          $altsIn.each(function(index, el){
            if (alternativas[condIn].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (condIn != 'situacao'&& condIn != 'setplaystep') { 
            $('#operadorIn').hide();
            $('#opcoesIn').hide(); }
          else {
            $('#operadorIn').show();
            $('#opcoesIn').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 



          $altsIn1 = $('#opcoesIn1 option');
        $('#condicaoIn1').on('change', function(event){
          var condIn1 = this.value;
          $altsIn1.each(function(index, el){
            if (alternativas[condIn1].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (condIn1 != 'situacao'&& condIn1 != 'setplaystep') { 
            $('#operadorIn1').hide();
            $('#opcoesIn1').hide(); }
          else {
            $('#operadorIn1').show();
            $('#opcoesIn1').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 



          $altsIn2 = $('#opcoesIn2 option');
        $('#condicaoIn2').on('change', function(event){
          var condIn2 = this.value;
          $altsIn2.each(function(index, el){
            if (alternativas[condIn2].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (condIn2 != 'situacao'&& condIn2 != 'setplaystep') { 
            $('#operadorIn2').hide();
            $('#opcoesIn2').hide(); }
          else {
            $('#operadorIn2').show();
            $('#opcoesIn2').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 



          $altsIn3 = $('#opcoesIn3 option');
        $('#condicaoIn3').on('change', function(event){
          var condIn3 = this.value;
          $altsIn3.each(function(index, el){
            if (alternativas[condIn3].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (condIn3 != 'situacao'&& condIn3 != 'setplaystep') { 
            $('#operadorIn3').hide();
            $('#opcoesIn3').hide(); }
          else {
            $('#operadorIn3').show();
            $('#opcoesIn3').show(); }
        }).change(); // Executa o método change uma vez para desabilitar 



          $altsIn4 = $('#opcoesIn4 option');
        $('#condicaoIn4').on('change', function(event){
          var condIn4 = this.value;
          $altsIn4.each(function(index, el){
            if (alternativas[condIn4].indexOf(el.value) == -1) {// Não existe
              $(el).prop('disabled', true); // Desabilita opções
            }
            else {// Existe
              $(el).prop('disabled', false); // Habilita opções
            }
          });
          if (condIn4 != 'situacao'&& condIn4 != 'setplaystep') { 
            $('#operadorIn4').hide();
            $('#opcoesIn4').hide(); }
          else {
            $('#operadorIn4').show();
            $('#opcoesIn4').show(); }
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
          <div class = 'fancy3'>
        
          <select name='not".$count."'>
            <option value=''></option>
            <option value='!'>!</option>
          </select>


          <select name='condicao".$count."' id='condicao".$count."'>
            <option value='selecione'></option>
            <option value='situacao'>play mode</option>
            <option value='setplaystep'>setplay step</option>
            <option value='bolaParada'>ball stopped</option>
            <option value='situacaoEspecial'>on special areas</option>
          </select>

          <select name='operador".$count."' id='operador".$count."'>
            <option value=''></option>
            <option value='=='>=</option>
            <option value='!='>!=</option>
          </select>

          <select name='opcoes".$count."' id='opcoes".$count."'>
            <option value='selecione'></option>
            <option value='play_on'>Play on</option>
            <option value='kick_off'>Kick off</option>
            <option value='throw_in'>Throw in</option>
            <option value='dir_free_kick'>Direct free kick</option>
            <option value='ind_free_kick'>Indirect free kick</option>
            <option value='corner_kick'>Corner kick</option>
            <option value='goal_kick'>Goal kick</option>
            <option value='keeper_catch'>Keeper catch</option>
            <option value='0'>0</option>
          </select>

          <select name='eou".$count."'>
            <option value=''></option>
            <option value='&&'>and</option>
            <option value='||'>or</option>
          </select>

          &ensp;<img src='img/add.png' onclick=\"add('esp1_".$prox."');\" width='16' height='16'>
          &ensp;<img src='img/remove.png' onclick=\"remove('esp1_".$count."');\" width='16' height='16'>
          
          <imput type='text' id='valor".$count."' value='".$count."' hidden>

          </div>
          </div>";
      } 
    } 

    function BlocoDois_ImprimeCondicoesEspecificas(){
      $count=1;

      for ($count=1;$count<=4;$count++) {
        $prox=$count+1;
        echo"
        <div class='esp2_".$count."' id='esp2_".$count."'>
          <div class = 'fancy3'>
        
          <select name='notIn".$count."'  id='parenteseIn".$count."'>
            <option value=''></option>
            <option value='!'>!</option>
          </select>


          <select name='condicaoIn".$count."' id='condicaoIn".$count."'>
            <option value='selecione'></option>
            <option value='situacao'>play mode</option>
            <option value='setplaystep'>setplay step</option>
            <option value='bolaParada'>ball stopped</option>
            <option value='situacaoEspecial'>on special areas</option>
          </select>

          <select name='operadorIn".$count."' id='operadorIn".$count."'>
            <option value=''></option>
            <option value='=='>=</option>
            <option value='!='>!=</option>
          </select>

          <select name='opcoesIn".$count."' id='opcoesIn".$count."'>
            <option value='selecione'></option>
            <option value='play_on'>Play on</option>
            <option value='kick_off'>Kick off</option>
            <option value='throw_in'>Throw in</option>
            <option value='dir_free_kick'>Direct free kick</option>
            <option value='ind_free_kick'>Indirect free kick</option>
            <option value='corner_kick'>Corner kick</option>
            <option value='goal_kick'>Goal kick</option>
            <option value='keeper_catch'>Keeper catch</option>
            <option value='0'>0</option>
          </select>

          <select name='eouIn".$count."' id='eouIn".$count."'>
            <option value=''></option>
            <option value='&&'>and</option>
            <option value='||'>or</option>
          </select>

          &ensp;<img src='img/add.png' onclick=\"add('esp2_".$prox."');\" width='16' height='16'>
          &ensp;<img src='img/remove.png' onclick=\"remove('esp2_".$count."');\" width='16' height='16'>
          
          <imput type='text' id='valorIn".$count."' value='".$count."' hidden>

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


         <div class="top"> 
          <h6 style="float:left; padding-top: 8px; padding-right: 10px;">Select Language</h6>
          <div class="switch-field" style="padding-top: 17px;">
            <input type="radio" id="radio-one" name="switch-two" value="yes" checked/>
            <label for="radio-one">English</label>
            <input onclick="location.href='gerador_pt-br.php'" type="radio" id="radio-two" name="switch-two" value="no" />
            <label for="radio-two">Portuguese</label>
          </div>
        </div>
        
      </div>
    </header>
    
     <link rel="stylesheet" href="css/togle.css" />

    <div class = "fancy">
    <div class="demo-crumbs mdl-color-text--grey-600">      

       <!-- MODIFICAÇÃO PARA TESTAR A SEGUNDA VERSAO DO GERAOR COM COMPILADOR
      <form action="methods.php" method="post">  -->

      <!-- FORM, AQUI MANDA OS DADOS PARA A PÁGINA DE TEMPLATES DE GERAÇÃO -->
      <form action="templates/geradorClangactionH.php" method="post">
        
        <div class = "fancy3"> 


        
      <div class = "block">
        <div class = "fancyForm">
            <!-- LISTA DE LABELS-->
            <h5>Behavior Name</h5>
            <h5>Description</h5>
            
            <div class="frame2">
            <div class="quote2">
              <h5>Behavior id <span style=" z-index: 10;" onclick="void(0);"  class="tooltip2"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info2">
                  <span class="pronounce2">Behavior id<span  class="fa2 fa-volume-up"></span></span>
                  <span class="text2" style="color: #fff;">The tools use behavior <b><i>ids</i></b> to identify them in some methods. This <b><i>id</i></b> must be unique for each behavior and must have only one digit. Please look at the "<i>namespace setplay</i>" function, in the file: <br><i><b>/Splanner/libs/libsetplay/setplay/clangaction.h</b></i> <br>to see which <b><i>id</i></b> is available before creating a new behavior. <a href="lerClangActionH.php">Click here</a> to see the contents of the file <i><b>clangaction.h</b></i></span>
                </span>
              </span>
              </h5>   
            </div>
            </div>
            <!--<h5>Name that will appear in the menu</h5>-->
        </div>
        

        <!-- LABELS NA DIV DA DIREIRA, IMPUTS NA DIV DA ESQUERDA, ASSIM FICA MAIS ALINHADO-->

        <div class = "fancyFormRight">
            <!-- LISTA DE IMPUTS CORRESPONDENTES-->
            <h5><input type="text" name="comportamento" id="comportamento"> </h5> 
            <h5><input type="text" name="comentario" id="comentario"> </h5>
            <h5><input type="text" name="actionType" id="actionType"> </h5>
            <!--<h5><input type="text" name="menu" id="menu"> </h5> -->
        </div>
      </div>
      <div class = "block">
        <div class = "fancyForm">
            <h5>Action:</h5>

            <div class="frame">
            <div class="quote">
              <h5 id="runBall">Has Destination Point? <span style=" z-index: 7;" onclick="void(0);"  class="tooltip"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info">
                  <span class="pronounce">Has Destination Point?<span  class="fa fa-volume-up"></span></span>
                  <span class="text" style="color: #fff;">Actions can have a destination point, which will be used to define whether the behavior will move the player, the ball or both:<br><i>- examples</i><br>In <b>passing</b> behaviors, the player moves the position of the ball</b>.<br>In <b>dribbling</b> behaviors or <b>movement</b> on the field with or without possession of the ball, there is a change in the position of a player on the field.</span>
                </span>
              </span>
              </h5>   
            </div>
            </div>

            <div class="frame3">
            <div class="quote3">
              <h5 id="runBall">Destination is a region or a player? <span style=" z-index: 7;" onclick="void(0);"  class="tooltip3"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info3">
                  <span class="pronounce3">Destination is a region or a player?<span  class="fa3 fa-volume-up"></span></span>
                  <span class="text3" style="color: #fff;">Indicates whether the target of the action is a player or a region on the field.<br><i>- examples</i><br>In <b>passing</b> behaviors, the <b>target</b > of the action is the <b>player</b> who will receive the ball, except if it is a pass to a region, as is the case of a corner kick, that the type of the destination point can be a region or a player inside opponent's goal area.<br> In <b>dribbling</b> behaviors the action <b>target</b> is a <b>region</b>.
                    <br>In <b>moving</b> behaviors on the field with or without ball possession, the action <b>target</b> is a <b>region</b>.
                  </span>
                </span>
              </span>
              </h5>   
            </div>
            </div>

            <h5>Performs ball pass?</h5>
            <h5>Throws the ball in the goal?</h5>
            

          

            <div class="frame4">
            <div class="quote4">
              <h5 id="runBall">Generate team library <span style=" z-index: 10;" onclick="void(0);"  class="tooltip4"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info4">
                  <span class="pronounce4">Generate team library<span  class="fa4 fa-volume-up"></span></span>
                  <span class="text4" style="color: #fff;">Generates a library of specific functions for the behavior in the team folder. Do not use this option if the team is not configurated to be modified.</span>
                </span>
              </span>
              </h5>   
            </div>
            </div>

            <!--<h5>Generate Interface</h5>-->
            <!--<h5>Generate Clang</h5>-->
        </div>

        <div class = "fancyFormRight">
            <h5>
            <input type="radio" id="comBola"
             name="posse" value="comBola" onclick="

             if (document.getElementById(1).checked==true) {
              document.getElementById('player').disabled=true;
              document.getElementById('region').disabled=false;
             }
              

              ">

            <label for="comBola">With Ball&ensp;&nbsp;</label>

            <input type="radio" id="semBola"
             name="posse" value="semBola" onclick="


                if (document.getElementById('comBola').checked==false && document.getElementById(2).checked==true)
                  document.getElementById(2).checked=false;

                if (document.getElementById('comBola').checked==false && document.getElementById(3).checked==true)
                  document.getElementById(3).checked=false;

                if (document.getElementById(1).checked==true ) {
                  document.getElementById('region').disabled=false;
                  document.getElementById('player').disabled=false;
                  }

                ">

            <label for="semBola">Without Ball</label>
            </h5>

          <h5>
              <div class="can-toggle can-toggle--size-small">
                <input id="1" type="checkbox" name="destpoint" value="destpoint" onclick="(function(){
                  
                  document.getElementById(3).checked=false;

                  if (document.getElementById(1).checked==false && document.getElementById(2).checked==true)
                  document.getElementById(2).checked=false;

                  if (document.getElementById(1).checked==true && document.getElementById('semBola').checked==true) {
                  document.getElementById('region').disabled=false;
                  document.getElementById('player').disabled=false;
                  }

                  if (document.getElementById(1).checked==true && document.getElementById('comBola').checked==true) {
                  document.getElementById('region').disabled=false;
                  }



                 if (document.getElementById(1).checked==false) {
                  document.getElementById('player').disabled=true;
                  document.getElementById('region').disabled=true;
                 }

                  })()">
                <label for="1">
                  <div class="can-toggle__switch" data-checked="&ensp;" data-unchecked="&ensp;"></div>
                </label>
              </div>
            </h5>



           

            <h5>
            <input type="radio" id="region"
             name="destpointType" value="region" disabled >
            <label for="region">Region&emsp;&ensp;</label>
            <input type="radio" id="player"
             name="destpointType" value="player" disabled >
            <label for="player">Player</label>
            </h5>


            <h5>
              <div class="can-toggle can-toggle--size-small">
                <input id="2" type="checkbox" name="passe" value="passe" onclick="(function(){
                  document.getElementById(3).checked=false;
                  if (document.getElementById(1).checked==false && document.getElementById(2).checked==true)
                  document.getElementById(1).checked=true;


                  if (document.getElementById('comBola').checked==false && document.getElementById(2).checked==true)
                  document.getElementById('comBola').checked=true;

                  if (document.getElementById(2).checked==true)
                  document.getElementById('player').disabled=false;
                  document.getElementById('region').disabled=false;


                  if (document.getElementById('comBola').checked==true && document.getElementById(1).checked==true && document.getElementById(2).checked==false) {
                  document.getElementById('player').disabled=true;}

                  })()">
                <label for="2">
                  <div class="can-toggle__switch" data-checked="&ensp;" data-unchecked="&ensp;"></div>
                </label>
              </div>
            </h5>

           

            <h5>
              <div class="can-toggle can-toggle--size-small">
                <input id="3" type="checkbox" name="gol" value="gol" onclick="(function(){
                  for (var i = 1; i < 4; i++ ) {
                    if (i!=3)
                    document.getElementById(i).checked=false;}

                   if (document.getElementById('comBola').checked==false && document.getElementById(3).checked==true)
                  document.getElementById('comBola').checked=true;

                  document.getElementById('player').disabled=true;
                  document.getElementById('region').disabled=true;

                  })()">
                <label for="3">
                  <div class="can-toggle__switch" data-checked="&ensp;" data-unchecked="&ensp;"></div>
                </label>
              </div>
            </h5>


            

            
            <h5>
            <input type="checkbox" name="team" value="team" class="check">
            </h5>
             

          

        </div>
      </div>

  <div class="box" style="display:none">
     Select resources:
  </div>

  <center>  
    <div class="toggle" style="display:none">
     Select resources:  
          <input type="checkbox" name="ballPosition" value="0" id="ballPosition" />
          <label for="ballPosition">Ball Position</label>

          <input type="checkbox"  name="myGoalPosition" value="1" id="myGoalPosition" />
          <label for="myGoalPosition">My Goal Position</label>                             
        
          <input type="checkbox" name="opponentGoalPosition" value="2" id="opponentGoalPosition"/>
          <label for="opponentGoalPosition">Opponent Goal Position</label>

          <input type="checkbox" name="myPosition" value="3" id="myPosition" />
          <label for="myPosition">My Position</label>                               
                


          <input type="checkbox"  name="myDistanceToTheBall" value="1" id="myDistanceToTheBall" />
          <label for="myDistanceToTheBall">My distance to the ball</label>                             
        
          <input type="checkbox" name="player2Goal" value="4" id="player2Goal"/>
          <label for="player2Goal">Player's distance to goal</label>  
        
         
    <br>

          <input type="checkbox" name="currentPlaymode" value="2" id="currentPlaymode"/>
          <label for="currentPlaymode">Check the current playmode</label>

          <input type="checkbox" name="insideGoalArea" value="5" id="insideGoalArea" />
          <label for="insideGoalArea">Check if I am inside the goal area</label>    
    </div>  
  </center>
  


    <font color="#2C6452"><div class="frame4">
            <div class="quote4">
              <h5 id="local">&nbsp;<br>&nbsp;Special Conditions <span style=" z-index: 10;" onclick="void(0);"  class="tooltip4"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info4">
                  <span class="pronounce4">Special Conditions <span  class="fa4 fa-volume-up"></span></span>
                  <span class="text4" style="color: #fff;">Select special situations where the new behavior <b>cannot</b> be performed.</span>
                </span>
              </span>
              </h5>
            </div>
            </div> 




    <div class = "fancy2">
      <!-- IMPRESSÃO DA PRIMEIRA LINHA DO BLOCO 1 DE CONDIÇÕES ESPECÍFICAS. AS 4 LINHAS SEGUINTES
           DESSE BLOCO SÃO IMPRESSAS NO LOOP DA FUNÇÃO BlocoUm_ImprimeCondicoesEspecificas(); -->
      <div class = "fancy3">
      
        <br><br>

        <select name="not">
          <option value=''></option>
          <option value='!'>!</option>
        </select>


        <select name="condicao" id="condicao">
          <option value="selecione"></option>
          <option value="situacao">play mode</option>
          <option value="setplaystep">setplay step</option>
          <option value="bolaParada">ball stopped</option>
          <option value="situacaoEspecial">on special areas</option>
        </select>

        <select name="operador" id="operador">
          <option value=""></option>
          <option value="==">=</option>
          <option value="!=">!=</option>
        </select>

        <select name="opcoes" id="opcoes">
          <option value="selecione"></option>
          <option value='play_on'>Play on</option>
          <option value='kick_off'>Kick off</option>
          <option value='throw_in'>Throw in</option>
          <option value='dir_free_kick'>Direct free kick</option>
          <option value='ind_free_kick'>Indirect free kick</option>
          <option value='corner_kick'>Corner kick</option>
          <option value='goal_kick'>Goal kick</option>
          <option value='keeper_catch'>Keeper catch</option>
          <option value='0'>0</option>
        </select>

        <select name="eou">
          <option value=""></option>
          <option value="&&">and</option>
          <option value="||">or</option>
        </select>

        &ensp;<img src="img/add.png" onclick="add('esp1_1');" width="16" height="16">
    
      </div>
      <?php BlocoUm_ImprimeCondicoesEspecificas(); ?>
    </div>



    <div class = "fancy2">
      <!-- IMPRESSÃO DA PRIMEIRA LINHA DO BLOCO 2 DE CONDIÇÕES ESPECÍFICAS. AS 4 LINHAS SEGUINTES
           DESSE BLOCO SÃO IMPRESSAS NO LOOP DA FUNÇÃO BlocoDois_ImprimeCondicoesEspecificas(); -->
      <div class = "fancy3">

        <br><br>
        
        <select name="notIn" id="parenteseIn">
          <option value=''></option>
          <option value='!'>!</option>
        </select>


        <select name="condicaoIn" id="condicaoIn">
          <option value="selecione"></option>
          <option value="situacao">play mode</option>
          <option value="setplaystep">setplay step</option>
          <option value="bolaParada">ball stopped</option>
          <option value="situacaoEspecial">on special areas</option>
        </select>

        <select name="operadorIn" id="operadorIn">
          <option value=""></option>
          <option value="==">=</option>
          <option value="!=">!=</option>
        </select>

        <select name="opcoesIn" id="opcoesIn">
          <option value="selecione"></option>
          <option value='play_on'>Play on</option>
          <option value='kick_off'>Kick off</option>
          <option value='throw_in'>Throw in</option>
          <option value='dir_free_kick'>Direct free kick</option>
          <option value='ind_free_kick'>Indirect free kick</option>
          <option value='corner_kick'>Corner kick</option>
          <option value='goal_kick'>Goal kick</option>
          <option value='keeper_catch'>Keeper catch</option>
          <option value='0'>0</option>
        </select>

        <select name="eouIn" id="eouIn">
          <option value=""></option>
          <option value="and">and</option>
          <option value="or">or</option>
        </select>

        &ensp;<img src="img/add.png" onclick="add('esp2_1');" width="16" height="16">
      </div>
      <?php BlocoDois_ImprimeCondicoesEspecificas(); ?>
    </div>
  

    <!-- BOTÕES DE MANUAL E SUBMIT (GERAR) -->
    <div class="bottom2">
      <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=submit value="Generate Behavior">

     
    
    
    </div>

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

  <script type="text/javascript">
    $(document).ready(function(){
     
     $('.check').on('click',function() {
        $(".box").toggle(this.checked);
    });

     $('.check').on('click',function() {
        $(".toggle").toggle(this.checked);
    });
    });
  </script>

  <script>
    const $select = document.getElementById('opcoes')

    function desabilitaOpcao(){
        if ($select.value == "1"){ 
             document.getElementById('2018').setAttribute('disabled','');
        } else{
                document.getElementById('2018').removeAttribute('disabled','');
        }
    }

    $select.addEventListener('input', desabilitaOpcao)
</script>

  <script src="plugin/material.min.js"></script>
  </body>
</html>
<?php

 }
      else {

        echo "
        <link rel=\"stylesheet\" href=\"plugin/bootstrap/3.4.1/bootstrap.min.css\">
        <html>
        <head>
        </head>
        <body>
        <div class=\"alert alert-danger alert-dismissible fade in\" id=\"success\" style=\"display:yes; margin-bottom:0px;\">
        <button type=\"button\" class=\"close\" data-hide=\"alert\">&times;</button>
        <big>Configured path for SPlanner is inaccessible or does not exist, please configure the path of SPlanner folder correctly in the file <i><b>caminho.php</b></i>. For more information, please see <b><i>README.txt</b></i>  inside RoboSocBG main content folder.</big>
        
        <div id='textoSucesso'></div>
        
        </div>

        </body>
        </html>";


        //echo '<script language="javascript">';
        //echo 'alert("Configured path for SPlanner is inaccessible or does not exist.\n\nVerifique se as configurações em Gerador/caminho.php estão consistentes com a pasta do SPlanner");';
        //echo 'window.location="gerador.php";';
        //echo '</script>';

      }

      
        //@ 
        //$time = fopen('../../'.$_SESSION['time'].'/strategy/setplays/SetplayAction.h','r+');
        //if ($time)
        //  fclose($time);
        //else  {
        //  echo '<script language="javascript">';
        //  echo 'alert("O caminho configurado para o Time está inacessível ou não existe!\n\nVerifique se as configurações em Gerador/caminho.php estão consistentes com a pasta do Time");';  
        //  echo 'window.location="gerador.php";';
        //  echo '</script>';
       // }
      }
      ?>
