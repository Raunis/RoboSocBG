<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.
$template_spactionh="\t\t".$_SESSION['comportamento'].",";

$template_drawLocal="\tvoid draw".$_SESSION['comportamento']."(QPainter *painter);".PHP_EOL;

$template_draw="\tvoid draw".$_SESSION['comportamento']."(QPainter *, QLineF &line);".PHP_EOL;

//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$template_log="File name:     spaction.h".PHP_EOL."Located in:         splanner\setPlayGUI".PHP_EOL;

$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spaction.h','r+');
if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_type/", $linha)) {
            $string4.= str_replace("@@_newAction_type", "@@_newAction_type".PHP_EOL.$template_spactionh, $linha);
            $template_log .="\t- tag: @@_newAction_type".PHP_EOL;
        }
        else if(preg_match("/@@_newAction_draw/", $linha)) { 
            if ( isset($_SESSION['destpoint'])
             ||  isset($_SESSION['gol']) ){

                $string4 .= str_replace("@@_newAction_draw", "@@_newAction_draw".PHP_EOL.$template_draw, $linha);
                $template_log .="\t- tag: @@_newAction_draw".PHP_EOL;
            }
            else if ( !isset($_SESSION['destpoint']) 
                  &&  !isset($_SESSION['gol']) ){ 

                $string4 .= str_replace("@@_newAction_draw", "@@_newAction_draw".PHP_EOL.$template_drawLocal, $linha);
                $template_log .="\t- tag: @@_newAction_draw".PHP_EOL;
            }
        }
        else {
            // vai colocando tudo numa nova string
            $string4.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string4)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spaction.h','r');
$linhas_final=0;
while(true) {
    $linha = fgets($arquivo);
    if ($linha==null) break;
    $linhas_final++;
}

$_GET["totalInserido"]+=($linhas_final-$linhas);


//Escrita do log
$arquivo = fopen('../log/LOG'.$_SESSION["comportamento"].'.txt','a+');
if ($arquivo) {
    fwrite ($arquivo,$template_log);
    fwrite ($arquivo,"Total lines inserted in this file:".($linhas_final-$linhas).PHP_EOL.PHP_EOL);
}
fclose($arquivo);

//chama gerador 2 com o segundo template
header("Location: http://localhost/Gerador/templates/geradorSpfcportugalporting.php?totalInserido=".$_GET["totalInserido"]);
