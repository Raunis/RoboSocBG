<?php

  /*
  * Este exemplo mostra como ler o conteúdo de um arquivo e exbir em uma página Web
  * Este exemplo utiliza os conteitos de manusear arquivos e passagem de parâmetros por URL
  */

  /*
  * Funções PHP
  * scandir(string) - Faz uma varredura no diretório indicado e retorna uma
  *      Array com os nomes dos arquivos encontrados. 
  * fopen(nome, modo_de_abertura) - retorna uma chamada (ponteiro) para um
  *      handle de arquivos podemos utilizar o handle para ler ou escrever
  *      em um arquivo.
  * fread(nome, tamanho_em_bytes) - Faz uma leitura em um arquivo e retorna
  *      uma String com todo o conteúdo do arquivo concatenado.
  * file_get_contents(nome) - mesma coisa que o fread.
  * strpos($string, $string_a_localizar) - Faz uma verificação em uma string
  *      bem busca de uma chave passada. Retorna a posição onde foi encontrada
  *      ou FALSE
  */

  // Variáveis utilizadas
  $DIRETORIO = '.';
  $EXTENSAO = '.txt';

  // Scaneia os arquivos do diretório passado.
  // Retorna um array com o nome dos arquivos
  $arquivos = scandir($DIRETORIO);

  // Veirifica se o parâmetro abrir= foi passado na URL
  if (isset($_GET['abrir'])) {
    // Guardamos o nome (string) do arquivo em uma variável
    $nome_do_arquivo = $_GET['abrir'];
    $arquivo = fopen($nome_do_arquivo, 'r');

    if (isset($arquivo) && $arquivo) {
      /*
      * Temos ao menos duas formas faceis para ler o conteúdo de um arquivo
      * fread e file_get_contents retorna todo o conteúdo de um arquivo
      * concatenado em uma única STRING
      */
      // $conteudo = fread($arquivo, filesize($nome_do_arquivo));
      $conteudo = file_get_contents($nome_do_arquivo);
      fclose($arquivo);
    }
  }
  ?>

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
    <link rel="stylesheet" href="../css/materializeLog.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/component.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          
    <!-- AQUI ACABA OS ESTILOS-->


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    

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

<div class="alert alert-success alert-dismissible fade in" id="success" style="display:none; margin-bottom:0px;">
    <button type="button" class="close" data-hide="alert">&times;</button>
    <big>Behavior generated successfully!</big>
    
    <div id='textoSucesso'></div>
    
    </div>
 
      <h3>&nbsp;&nbsp;Generated behavior log</h2>
      <h4>&nbsp;&nbsp;&nbsp;The log files below are located in the directory: <?php echo dirname(__FILE__); ?><br>
        &nbsp;&nbsp;&nbsp;The behavior log file you just created was named as follows: "LOG"+Name chosen for the behavior<br><br><br> &nbsp;&nbsp;&nbsp;Available log files:
        </h4>
      <ul>
        <!-- para cada nome de arquivo no array -->
        <?php foreach($arquivos as $arquivo): ?>
          <!-- Verifique se a extensão .txt existe na string do nome -->
          <?php if (strpos($arquivo, $EXTENSAO)): ?>
          <li>
            <!-- mostre um link com o nome do arquivo e o método GET ?abrir= -->
            <a style="color:blue;" href="?abrir=<?php echo $arquivo; ?>"><?php echo $arquivo; ?></a>
          </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <!-- Criamos uma textarea para mostrar o conteúdo do arquivo selecionado -->
      <?php if (isset($conteudo)): ?>
      <h3>

        <link rel="stylesheet" href="../css/toolips.css" />
        <div class="frame3">
            <div class="quote3">
              &nbsp;&nbsp;File Contents: <?php echo $nome_do_arquivo; ?> <span style=" z-index: 10;" onclick="void(0);"  class="tooltip3"><img style="padding-bottom: 5px; " src='../img/interrogacao1' onclick="//location.href='actiontype.php'" width='20' height='20'>
                <span class="info3">
                  <span class="pronounce3">File Contents:<span  class="fa3 fa-volume-up"></span></span>
                  <span class="text3" style="color: #fff;">Use the log to find the codes that the Generator modified to create the new behavior.</span>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn waves-effect waves-light col l10 offset-l1 grey" type=button value="Voltar" onclick="location.href='../gerador.php'">
      </div>
    </body>
  </html>
