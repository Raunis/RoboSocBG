<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.

 //@@_newAction_fieldMessageCondition
$template_messageCondition="            || actType == SpAction::".$_SESSION['comportamento'].PHP_EOL;


//@@_newAction_fieldMessage
$_newAction_fieldMessage="            else if(actType == SpAction::".$_SESSION['comportamento']." )
                setToolTip(QString(\"Choose target player moving mouse pointer to him...\"));";

$_newAction_fieldMessage_PassRegion="               else if(actType == SpAction::".$_SESSION['comportamento'].")
                setToolTip(QString(\"Choose point to pass the ball...\"));";


//@@_newAction_fieldLine
$template_fieldLine="                   else if(actType == SpAction::".$_SESSION['comportamento'].")
                line = new QLineF(actorPoint, player->getNextPosition()->getRealPoint());";

$template_fieldLine_passRegion="                    else if(actType == SpAction::".$_SESSION['comportamento'].")
                        line = new QLineF(actorPoint, drawingAction->getSpDest()->getRealPoint());";


//@@_newAction_fieldEventCondition
$_newAction_fieldEventCondition="               || actType == SpAction::".$_SESSION['comportamento'].PHP_EOL; 


//@@_newAction_fieldEvent
$template_fieldEvent="
                else if(actType == SpAction::".$_SESSION['comportamento'].")
                {
                    foreach(SpPlayer * player , inPlayers)
                    {
                        player->setHighLight(false);
                        if(player == drawingAction->getActor())
                            continue;

                            if(player->contains(player->mapFromScene(point)))
                            {
                                SpAction *a = player->getAction();
                                if(a && a->getType() == SpAction::goToOffsideLine)
                                    break;
                                QLineF *line = new QLineF(actorPoint, player->getNextPosition()->getRealPoint());

                                if(line->length() <= SpAction::maxBallDistance)
                                {
                                    newAction->setDestPlayer(player);
                                    //newAction->actualize();
                                    drawingAction->getActor()->addAction(newAction);
                                    if(player->isGhost())
                                        player->cameFromGhost();

                                }
                                else
                                    break;
                            }
                    }
                }";


//@@_newAction_PassRegion_event
$template_fieldEvent_passRegion="                        else if(actType == SpAction::".$_SESSION['comportamento'].")
                        {
                            SpAction *a = new SpAction(drawingAction->getDestActor(),SpAction::run, this);
                            a->setDest(drawingAction->getSpDest()->getScreenPoint());
                            drawingAction->getDestActor()->addAction(a);
                        }";

//@@_newAction_PassRegion_addAction
$template_passRegion_addAction="
void SpField::addAction".$_SESSION['comportamento']."(SpPlayer *p, int type, SpPlayer *destP)
{
    drawingAction = new SpAction(p, type, this);
    drawingAction->setDestPlayer(destP);
    scene()->addItem(drawingAction);
}
";

$template_log="File name:     spfield.cpp".PHP_EOL."Located in:         splanner\setPlayGUI".PHP_EOL;

//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spfield.cpp','r+');
if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_fieldMessageCondition/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                $string9.= str_replace("@@_newAction_fieldMessageCondition", "@@_newAction_fieldMessageCondition".PHP_EOL.$template_messageCondition, $linha);
                $template_log .="\t- tag: @@_newAction_fieldMessageCondition".PHP_EOL;
            }
            else
                $string9.= $linha;
        }
        else if(preg_match("/@@_newAction_fieldMessage/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string9 .= str_replace("@@_newAction_fieldMessage", "@@_newAction_fieldMessage".PHP_EOL.$_newAction_fieldMessage_PassRegion, $linha);
                    $template_log .="\t- tag: @@_newAction_fieldMessage".PHP_EOL;
                }
                else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                    $string9 .= str_replace("@@_newAction_fieldMessage", "@@_newAction_fieldMessage".PHP_EOL.$_newAction_fieldMessage, $linha);
                    $template_log .="\t- tag: @@_newAction_fieldMessage".PHP_EOL;
                }
                    //$string9.= str_replace("@@_newAction_fieldMessage", "@@_newAction_fieldMessage".PHP_EOL.$_newAction_fieldMessage, $linha);
                    //$template_log .="\t- tag: @@_newAction_fieldMessage".PHP_EOL;
            }
            else
                $string9.= $linha;
        }
        else if (preg_match("/@@_newAction_fieldLine/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string9 .= str_replace("@@_newAction_fieldLine", "@@_newAction_fieldLine".PHP_EOL.$template_fieldLine_passRegion, $linha);
                    $template_log .="\t- tag: @@_newAction_fieldLine".PHP_EOL;
                }
                else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                    $string9 .= str_replace("@@_newAction_fieldLine", "@@_newAction_fieldLine".PHP_EOL.$template_fieldLine, $linha);
                    $template_log .="\t- tag: @@_newAction_fieldLine".PHP_EOL;
                }
                    //$string9 .= str_replace("@@_newAction_fieldLine", "@@_newAction_fieldLine".PHP_EOL.$template_fieldLine, $linha);
                    //$template_log .="\t- tag: @@_newAction_fieldLine".PHP_EOL;
            }
            else
                $string9.= $linha;
        } 
        else if (preg_match("/@@_newAction_field_EventCondition/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                $string9 .= str_replace("@@_newAction_field_EventCondition", "@@_newAction_field_EventCondition".PHP_EOL.$_newAction_fieldEventCondition, $linha);
                $template_log .="\t- tag: @@_newAction_field_EventCondition".PHP_EOL;
            }
            else
                $string9.= $linha;
        } 
        else if (preg_match("/@@_newAction_fieldEvent/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                    $string9 .= str_replace("@@_newAction_fieldEvent", "@@_newAction_fieldEvent".PHP_EOL.$template_fieldEvent, $linha);
                    $template_log .="\t- tag: @@_newAction_fieldEvent".PHP_EOL;
                }
                else
                    $string9.= $linha;
            }
            else
                $string9.= $linha;
        }


        else if (preg_match("/@@_newAction_PassRegion_fieldEvent/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string9 .= str_replace("@@_newAction_PassRegion_fieldEvent", "@@_newAction_PassRegion_fieldEvent".PHP_EOL.$template_fieldEvent_passRegion, $linha);
                    $template_log .="\t- tag: @@_newAction_PassRegion_fieldEvent".PHP_EOL;
                }
                else
                    $string9.= $linha;
            }
            else
                $string9.= $linha;
        } 
        else if (preg_match("/@@_newAction_PassRegion_addAction/", $linha)) {
            if (isset($_SESSION['passe']) ) {
                if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string9 .= str_replace("@@_newAction_PassRegion_addAction", "@@_newAction_PassRegion_addAction".PHP_EOL.$template_passRegion_addAction, $linha);
                    $template_log .="\t- tag: @@_newAction_PassRegion_addAction".PHP_EOL;
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
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spfield.cpp','r');
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
header("Location: http://localhost/Gerador/templates/geradorSpfieldH.php?totalInserido=".$_GET["totalInserido"]);
