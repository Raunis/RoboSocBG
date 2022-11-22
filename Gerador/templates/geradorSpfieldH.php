<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.


//@@_newAction_addAction_PassRegion
$template_addAction_passRegion="
void addAction".$_SESSION['comportamento']."(SpPlayer *p, int type, SpPlayer *destP);
";

$template_log="File name:     spfield.h".PHP_EOL."Located in:         splanner\setPlayGUI".PHP_EOL;

//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spfield.h','r+');
if ($arquivo) {
    $string9="";
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_addAction_PassRegion/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "region")        ==0) {   
                    $string9.= str_replace("@@_newAction_addAction_PassRegion", "@@_newAction_addAction_PassRegion".PHP_EOL.$template_addAction_passRegion, $linha);
                    $template_log .="\t- tag: @@_newAction_addAction_PassRegion".PHP_EOL;
                }
                else
                    $string9.= $linha; 
            }
            else
                $string9.= $linha;
        }
        
        else {
            // vai colocando tudo numa nova string
            $string9.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string9)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spfield.h','r');
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
    fwrite ($arquivo,PHP_EOL.PHP_EOL."Total lines inserted in all files: ".$_GET["totalInserido"].".".PHP_EOL."");
}
fclose($arquivo);


//chama gerador 2 com o segundo template
header("Location: http://localhost/Gerador/log/lerArquivo.php");