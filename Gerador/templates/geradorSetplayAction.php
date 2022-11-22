<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treicho ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.
$template_setplayaction="void SetplayAction::execute( const fcportugal::setplay::Act".$_SESSION['comportamento']."& a ){
".PHP_EOL."
}";


//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['time'].'/strategy/setplays/SetplayAction.cpp','r+');
if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction/", $linha)) {
            $linha_busca_insercao=$linhas;
            $string8.= str_replace("@@_newAction", "@@_newAction".PHP_EOL.$template_setplayaction, $linha);
        } else {
            // vai colocando tudo numa nova string
            $string8.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string8)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE

//ESCRITA DO LOG
$template_log="File name:     SetplayAction.cpp".PHP_EOL."Located in:         bahiart\bahia\strategy\setplays".PHP_EOL."\t- tag: @@_newAction".PHP_EOL;

//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['time'].'/strategy/setplays/SetplayAction.cpp','r');
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
header("Location: http://localhost/Gerador/templates/geradorStrategyBehavior.php?totalInserido=".$_GET["totalInserido"]);
