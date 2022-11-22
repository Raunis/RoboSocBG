
<?php
//#include "Analex.h"
include_once 'analex.php';
include_once 'sintatico.php';

$codigo = $_POST['code'];

  function lexico ($codigo) { 
    //$codigo="if ( actions )";
    $token = new Token();
    $lexico = new Lexico();
    while ($lexico->posicao < strlen($codigo)) {
      $token = $lexico->analex($codigo."#");
      $lexico->imprimir($token);
    }
  }

  function sintatico ($codigo) {
    //$codigo="if ( actions ) then {}";
    $sintatico = new Sintatico();
    $sintatico->inicio($codigo."#");
    while ($sintatico->posicao < strlen($codigo)) {
      $sintatico->prog($codigo."#");
    }
    return $sintatico->convertedCode;
  }
 
//lexico($codigo);
$convertedCode = sintatico($codigo);



//printf ("\nAnalise simtatica concluida.\n \nPressione Enter para sair.");

?>


<!doctype html>

<html lang="en">
  <head>

    <style>
         input, select {
            width: 180px;
            border: 2px solid #E6E6E6;
            padding: 0;
            margin: 0;
            height: 22px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
         }
      </style>

      <?php

        //$code = $_POST['code'];
        //{echo $code[0];
        //echo $code[1];
        //echo $code[2];
        //echo $code[3];
        //echo $code[4];}
        //$array=explode(" ",$code);
        //$tam=strlen($code);
        
        /*$convertedCode = str_replace('IF (Region) THEN', 'parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
      nothing_p);

  if(result.hit){
    string rest;

    Region* reg= Region::parse(in.substr(result.length),rest,parameters,players);

    if(reg){', $code);
        $convertedCode = str_replace('Final', '   //Check for the final \')\'
      result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>\')\',
          nothing_p);
      if(result.hit){
        out=rest.substr(result.length);
        return new ActPos(reg);
      }
    }
  }', $convertedCode);
*/
      ?>

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
    <link href="../css/estilo.css" rel="stylesheet" type="text/css" media="all">
    
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- AQUI ACABA OS ESTILOS-->

    <link rel="stylesheet" type="text/css" href="../plugin/codemirror/lib/codemirror.css">    

    <link rel="stylesheet" href="../plugin/codemirror/theme/3024-day.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/3024-night.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/abcdef.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/ambiance.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/ayu-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/ayu-mirage.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/base16-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/bespin.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/base16-light.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/blackboard.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/cobalt.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/colorforth.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/dracula.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/duotone-light.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/eclipse.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/elegant.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/erlang-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/gruvbox-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/hopscotch.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/icecoder.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/isotope.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/lesser-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/liquibyte.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/lucario.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/material.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/material-darker.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/material-palenight.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/material-ocean.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/mbo.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/mdn-like.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/midnight.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/monokai.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/moxer.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/neat.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/neo.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/night.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/nord.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/oceanic-next.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/panda-syntax.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/paraiso-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/paraiso-light.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/pastel-on-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/railscasts.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/rubyblue.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/seti.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/shadowfox.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/solarized.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/the-matrix.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/tomorrow-night-bright.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/tomorrow-night-eighties.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/ttcn.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/twilight.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/vibrant-ink.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/xq-dark.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/xq-light.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/yeti.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/idea.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/darcula.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/yonce.css">
    <link rel="stylesheet" href="../plugin/codemirror/theme/zenburn.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
  </head>

  <body>
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
    <form action="analizador/main.php" method="post">
    <font color="#2C6452">&nbsp;<br>&nbsp;Method Body</font>

    <div class = "fancy5">
      <div class = "margem2">        
          <textarea id="code" name="code" class="code"><?php echo $convertedCode;?></textarea>
      </div>
    </div>

    <font color="#2C6452">&nbsp;<br>&nbsp;Modelos</font>

    <div class = "fancy5">
      <div class = "margem2">
        
          <textarea id="code2" name="code2" class="code2"></textarea>
        
      </div>
    </div>

    <div class = "fancyCode">
      <p>&nbsp;Change Clang code:</p>
      &nbsp;Select a theme:
    </div>

    <div class = "fancyFormRight">
      <p>
      <select id="clang">
        <option selected="">default</option>
        <option>pass</option>
        <option>passToBestPlayer</option>
        <option>kick</option>
        <option>longKick</option>
        <option>pass</option>
        <option>dribble</option>
      </select>
      </p>

     
      <select onchange="selectTheme()" id="select">
        <option selected="">default</option>
        
        <option>3024-night</option>
        <option>3024-day</option>
        <option>abcdef</option>
        <option>ambiance</option>
        <option>ayu-dark</option>
        <option>ayu-mirage</option>
        <option>base16-dark</option>
        <option>base16-light</option>
        <option>bespin</option>
        <option>blackboard</option>
        <option>cobalt</option>
        <option>colorforth</option>
        <option>darcula</option>
        <option>dracula</option>
        <option>duotone-dark</option>
        <option>duotone-light</option>
        <option>eclipse</option>
        <option>elegant</option>
        <option>erlang-dark</option>
        <option>gruvbox-dark</option>
        <option>hopscotch</option>
        <option>icecoder</option>
        <option>idea</option>
        <option>isotope</option>
        <option>lesser-dark</option>
        <option>liquibyte</option>
        <option>lucario</option>
        <option>material</option>
        <option>material-darker</option>
        <option>material-palenight</option>
        <option>material-ocean</option>
        <option>mbo</option>
        <option>mdn-like</option>
        <option>midnight</option>
        <option>monokai</option>
        <option>moxer</option>
        <option>neat</option>
        <option>neo</option>
        <option>night</option>
        <option>nord</option>
        <option>oceanic-next</option>
        <option>panda-syntax</option>
        <option>paraiso-dark</option>
        <option>paraiso-light</option>
        <option>pastel-on-dark</option>
        <option>railscasts</option>
        <option>rubyblue</option>
        <option>seti</option>
        <option>shadowfox</option>
        <option>solarized dark</option>
        <option>solarized light</option>
        <option>the-matrix</option>
        <option>tomorrow-night-bright</option>
        <option>tomorrow-night-eighties</option>
        <option>ttcn</option>
        <option>twilight</option>
        <option>vibrant-ink</option>
        <option>xq-dark</option>
        <option>xq-light</option>
        <option>yeti</option>
        <option>yonce</option>
        <option>zenburn</option>
      </select>
      

    </div>
<br><br><br><br>
    <!-- BOTÕES DE MANUAL E SUBMIT (GERAR) -->
    <center>
      <div class="bottom2"> 
        <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Back" onclick="location.href='methods.php'">
        <input class="btn waves-effect waves-light col l10 offset-l1 grey" type=submit value="Converter">
      </div>
    </center>

  </form>
  
  </div>
  </div>
  </div>
  <footer class="demo-footer mdl-mini-footer">
  </footer>
  </div>

  <!-- javascript -->

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../plugin/codemirror/lib/codemirror.js"></script>
  <script type="text/javascript" src="../plugin/codemirror/mode/clike/clike.js"></script>

  <script wfd-invisible="true">
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
      lineNumbers: true,
      styleActiveLine: true,
      theme : "yeti",
      mode: "text/x-c++src",
      matchBrackets: true
    });
    var input = document.getElementById("select");
    function selectTheme() {
      var theme = input.options[input.selectedIndex].textContent;
      editor.setOption("theme", theme);
    }
    var choice = (location.hash && location.hash.slice(1)) ||
                 (document.location.search &&
                  decodeURIComponent(document.location.search.slice(1)));
    if (choice) {
      input.value = choice;
      editor.setOption("theme", choice);
    }
    CodeMirror.on(window, "hashchange", function() {
      var theme = location.hash.slice(1);
      if (theme) { input.value = theme; selectTheme(); }
    });
  </script>


   <script wfd-invisible="true">
    var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
      lineNumbers: true,
      styleActiveLine: true,
      theme : "yeti",
      mode: "text/x-c++src",
      matchBrackets: true
    });
    var input = document.getElementById("select");
    function selectTheme() {
      var theme = input.options[input.selectedIndex].textContent;
      editor.setOption("theme", theme);
    }
    var choice = (location.hash && location.hash.slice(1)) ||
                 (document.location.search &&
                  decodeURIComponent(document.location.search.slice(1)));
    if (choice) {
      input.value = choice;
      editor.setOption("theme", choice);
    }
    CodeMirror.on(window, "hashchange", function() {
      var theme = location.hash.slice(1);
      if (theme) { input.value = theme; selectTheme(); }
    });
  </script>



  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

