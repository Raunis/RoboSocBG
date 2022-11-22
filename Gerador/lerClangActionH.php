

  <html>
    <head>
      <style>
        body { font-family: sans-serif;}
        a { color: blue; }
        textarea { margin:20px; width: 97%; height: 500px; padding-bottom: 370px; padding-left: 20px; padding-top: 20px;}
      </style>
    


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
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
    
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/materializeLog.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/component.css" />


          
    <!-- AQUI ACABA OS ESTILOS-->


  

    <script src="plugin/jquery/3.5.1/jquery.min.js"></script>
    <script src="plugin/bootstrap/3.4.1/bootstrap.min.js"></script>
    <script src="plugin/jquery/1.11.1/jquery.min.js"></script>

  </head>

  <body>


    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll dl-color-text--grey-600">
      <div class="mdl-layout__header-row" <div onclick="location.href='../gerador.php';" style="cursor: pointer;">

        <span class="mdl-layout-title">Behavior Generator</span>


         <div class="top"> 
          
        </div>
        
      </div>
    </header>
    
  
   
  <script>

    $(function(){
    $("[data-hide]").on("click", function(){
        $(this).closest("." + $(this).attr("data-hide")).hide();
    });
    });


 window.onload = function() {

    
        
          
          $('#success').fadeIn();
        
      //mostrando o retorno do post
      //alert(data)

  }
</script>



<?php

    session_start(); 
    if (isset($_SESSION['splanner'])) {
    $arquivo=fopen('../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.h','r');

    if (isset($arquivo) && $arquivo) {
      $caminho="../../".$_SESSION['splanner']."/libs/libsetplay/setplay/clangaction.h";
      $caminho2="/".$_SESSION['splanner']."/libs/libsetplay/setplay/clangaction.h";
      /*
      * Temos ao menos duas formas faceis para ler o conteúdo de um arquivo
      * fread e file_get_contents retorna todo o conteúdo de um arquivo
      * concatenado em uma única STRING
      */
      // $conteudo = fread($arquivo, filesize($nome_do_arquivo));
      $conteudo = file_get_contents($caminho);
      fclose($arquivo);

    }
    else{
    echo "<div class=\"alert alert-danger alert-dismissible fade in\" id=\"success\" style=\"display:none; margin-bottom:0px;\">
    <button type=\"button\" class=\"close\" data-hide=\"alert\">&times;</button>
    <big>File not found, please configure the path of SPlanner folder in the file <i><b>caminho.php</b></i>, to the RoboSocBG can read the file <b><i>clangaction.h</b></i>. For more information, please see <b><i>README.txt</b></i>  inside RoboSocBG main content folder.</big>
    
    <div id='textoSucesso'></div>
    
    </div>";
     
    }
  }

  ?>
      
      <h3>&nbsp;&nbsp;ClangAction.h content file</h2>
      <h4>&nbsp;&nbsp;&nbsp;The clangAction.h file below are located in the directory: <?php if (isset($_SESSION)) echo $caminho2; ?><br>
        </h4>
    

      <!-- Criamos uma textarea para mostrar o conteúdo do arquivo selecionado -->
      <?php if (isset($conteudo)): ?>
      <h4>

        <link rel="stylesheet" href="css/toolips.css" />
        <div class="frame4">
            <div class="quote4">
              &nbsp;&nbsp;&nbsp;File contents: <span style=" z-index: 10;" onclick="void(0);"  class="tooltip4"><img style="padding-bottom: 5px; " src='img/interrogacao1' onclick="//location.href='actiontype.php'" width='15' height='15'>
                <span class="info4">
                  <span class="pronounce4">File Contents:<span  class="fa4 fa-volume-up"></span></span>
                  <span class="text4" style="color: #fff;">Please look at the "namespace setplay" function, after the #include declarations, to see which <b><i>id</i></b> is available before creating a new behavior.</span>
                </span>
              </span>
            </div>
            </div>
            </h2>
      <textarea style="margin:20px;">
        <?php echo $conteudo; ?>
      </textarea>
      <?php endif; ?>
      <div class="bottom2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Voltar" onclick="location.href='gerador.php'">
      </div>
    </body>
  </html>
