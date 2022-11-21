<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.\ 


$value = exec('bash ./strategyBehaviorCreator.sh');

$arquivo_antigo = "../../../bahiart/bahia/strategy/testebehavior.cpp";
$arquivo_novo = "../../../bahiart/bahia/strategy/Behave".$_SESSION["comportamento"].".cpp";
rename($arquivo_antigo, $arquivo_novo);

$template_ballPosition="Vector ballPos = ws->ball->position.to2d();";

$template_myGoalPosition="Vector ourGoalPos = ws->getBackCenterGoal().to2d();";

$template_opponentGoalPosition="Vector theirGoalPos = ws->getFrontCenterGoal().to2d();";

$template_myPosition="Vector myPos = ws->me->position.to2d();";

$template_myDistanceToTheBall="float distMeToBall = ws->me->position.to2d().getDistanceTo(ws->ballPos);";

$template_player2Goal="float distGoal = player->position.to2d().getDistanceTo(ws->myGoalPos);";

$template_currentPlaymode="If (ws->game->playmode ==??)";

$template_insideGoalArea="ws->isInsideGoalArea(ws->me->position.to2d());";

$template_parse="\tres=Act".$_SESSION['comportamento']."::parse(in,out,parameters,players);
    if(res) return res;";

$template_log="File name:     Behave".$_SESSION["comportamento"].".cpp".PHP_EOL."Located in:         bahiart\strategy".PHP_EOL;

$linhas=0;
$arquivo=fopen('../../../'.$_SESSION['time'].'/strategy/Behave'.$_SESSION["comportamento"].'.cpp','r+');
if ($arquivo) {
    //if (!fwrite($arquivo, '//       BIBLIOTECA DE FUNÇÕES       //'.PHP_EOL.PHP_EOL)) die('Não foi possível atualizar o arquivo.');

    //ALTERNATIVA
    $stringBehavior ='/*@@_newAction_bib'.PHP_EOL.'             BIBLIOTECA DE FUNÇÕES       '.PHP_EOL.PHP_EOL;
    
    if (isset($_SESSION['ballPosition'])) {
        //if (!fwrite($arquivo, $template_ballPosition)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'BallPosition'.PHP_EOL.$template_ballPosition.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['myGoalPosition'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_myGoalPosition)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'MyGoalPosition'.PHP_EOL.$template_myGoalPosition.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['opponentGoalPosition'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_opponentGoalPosition)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'OpponentGoalPosition'.PHP_EOL.$template_opponentGoalPosition.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['myPosition'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_myPosition)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'MyPosition'.PHP_EOL.$template_myPosition.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['myDistanceToTheBall'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_myDistanceToTheBall)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'MyDistanceToTheBall'.PHP_EOL.$template_myDistanceToTheBall.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['player2Goal'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_player2Goal)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'Player2Goal'.PHP_EOL.$template_player2Goal.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['currentPlaymode'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_currentPlaymode)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'CurrentPlaymode'.PHP_EOL.$template_currentPlaymode.PHP_EOL.PHP_EOL;
    }
    if (isset($_SESSION['insideGoalArea'])) {
        //if (!fwrite($arquivo, PHP_EOL.$template_insideGoalArea)) die('Não foi possível atualizar o arquivo.');
        //ALTERNATIVA
        $stringBehavior .= 'InsideGoalArea'.PHP_EOL.$template_insideGoalArea.PHP_EOL.PHP_EOL;
    }
    $stringBehavior .='*/';
    //fclose($arquivo);

    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // escreve o arquivo
    if (!fwrite($arquivo, $stringBehavior)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['time'].'/strategy/Behave'.$_SESSION["comportamento"].'.cpp','r');
$linhas_final=0;
while(true) {
    $linha = fgets($arquivo);
    if ($linha==null) break;
    $linhas_final++;
}

//ATUALIZA A VARIÁVEL DE CONTAGEM DE LINHAS INSERIDAS, COLOQUEI ESSA VARIÁVEL FORA DA SESSION POR QUE
//ELA NÃO VEM DO FORM, ESSA CONTAGEM É INCREMENTADA A CADA ARQUIVO ALTERADO
$_GET["totalInserido"]+=($linhas_final-$linhas);



$template_log .="\t- tag: @@_newAction_bib".PHP_EOL;


//Escrita do log
$arquivo = fopen('../log/LOG'.$_SESSION["comportamento"].'.txt','a+');
if ($arquivo) {
    fwrite ($arquivo,$template_log);
    fwrite ($arquivo,"Total lines inserted in this file:".($linhas_final-$linhas).PHP_EOL.PHP_EOL);
}
fclose($arquivo);

header("Location: http://localhost/Gerador/templates/geradorStrategyBehaviorH.php?totalInserido=".$_GET["totalInserido"]);