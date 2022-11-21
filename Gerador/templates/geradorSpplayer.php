<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.
$template_action="\tQAction * ".$_SESSION['comportamento']."Action  = menu.addAction(\"".$_SESSION['comportamento']."\");";

$template_menu="\t\t\tmenu.removeAction(".$_SESSION['comportamento']."Action);";

$template_draw="\telse if(resultAction == ".$_SESSION['comportamento']."Action)
        \tfield->addAction( this, SpAction::".$_SESSION['comportamento'].");";

$template_drawLocal="else if(resultAction == ".$_SESSION['comportamento']."Action)
    \taddAction(new SpAction(this, SpAction::".$_SESSION['comportamento'].", field));";

$template_drawPassRegion="field->addAction".$_SESSION['comportamento']."(this, SpAction::".$_SESSION['comportamento'].", setPlay->getPlayer(k));";

$template_ballStoppedOnStep = "
                                         && action->getType() != SpAction::".$_SESSION['comportamento']."";

$template_trasition="\t\t\t\t\tcase SpAction::".$_SESSION['comportamento'].":";

$template_gol="                case SpAction::".$_SESSION['comportamento'].":";

$template_dialog="\t\t\tnewAction->getType() != SpAction::".$_SESSION['comportamento']." &&";

$template_actionsByTransitions = "
                    case SpAction::".$_SESSION['comportamento'].":";

$template_conditionsByTransitions_Pass = "
    else if(newAction->getType() == SpAction::".$_SESSION['comportamento'].")
        conditionsByTransitions.insert(setPlay->getCurrentTransitionNumber(), canPassPlayer);";

$template_conditionsByTransitions_PassRegion = "
    else if(newAction->getType() == SpAction::".$_SESSION['comportamento'].")
        conditionsByTransitions.insert(setPlay->getCurrentTransitionNumber(), canPassRegion);";

$template_conditionsByTransitions_Shoot = "
    else if(newAction->getType() == SpAction::".$_SESSION['comportamento'].")
        conditionsByTransitions.insert(setPlay->getCurrentTransitionNumber(), canShoot);";



$template_menu_passRegion = "
    QMenu* ".$_SESSION['comportamento']."Menu = new QMenu(\"".$_SESSION['comportamento']." to player no...\");
    QMap< int, QAction * > playerList".$_SESSION['comportamento'].";
    foreach(SpPlayer *p, field->getInPlayers())
    {
        if (p == this)
            continue;
        QAction * a = ".$_SESSION['comportamento']."Menu->addAction(QString::number(p->getNumber()));
        playerList".$_SESSION['comportamento'].".insert(p->getNumber(), a);
    }";

$template_genericDraw_PassRegion="

        foreach(int k , playerList".$_SESSION['comportamento'].".keys())
            if(resultAction == playerList".$_SESSION['comportamento']."[k])
                field->addAction".$_SESSION['comportamento']."(this, SpAction::".$_SESSION['comportamento'].", setPlay->getPlayer(k));

";

$template_insertMenu_passRegion="
            menu.insertMenu(passAction, ".$_SESSION['comportamento']."Menu);";


/*  
ESQUEMINHA DOS BLOCOS DE CONDIÇÃO ESPECÍFICA
    if (condIfPrincipal (1ª linha B1) + 4 condIf) {
        
        if (condicaoIfInPrincipal (1ª linha B2) + 4 condicaoIfIn) {
                
                remove ação;

        }

    }
*/


//ORGANIZA AS VARÁVEIS DE CONDIÇÃO ESPECÍFICA DA PRIMEIRA LINHA DO BLOCO 1
if(isset($_SESSION["condicao"])) {
    if ($_SESSION["condicao"]  == "situacao"){
       $condIfPrincipal = "situation ".$_SESSION["operador"]." ".$_SESSION["opcoes"]." ".$_SESSION["eou"]." ";
    }
    else if ($_SESSION["condicao"]  == "setplaystep") {
       $condIfPrincipal = " setPlay->getCurrentStepNumber() ".$_SESSION["operador"]." ".$_SESSION["opcoes"]." ".$_SESSION["eou"]." ";
    }
    else if ($_SESSION["condicao"]  == "bolaParada") {
       $condIfPrincipal = $_SESSION["not"]."setPlay->isBallStopped() ".$_SESSION["eou"]." ";
    }
    else if ($_SESSION["condicao"]  == "situacaoEspecial") {
       $condIfPrincipal = $_SESSION["not"]."field->isOnSpecialAreas(actualPosition->getScreenPoint()) ".$_SESSION["eou"]." ";
    }
}

//ORGANIZA AS VARÁVEIS DE CONDIÇÕES ESPECÍFICAS DAS OUTRAS 4 LINHAS DO BLOCO 1
$condIf = array();
for ($count=1;$count<=4;$count++) {

    if(isset($_SESSION["condicao".$count])) {
        if ($_SESSION["condicao".$count]  == "situacao"){
           $condIf[$count] = "situation ".$_SESSION["operador".$count]." ".$_SESSION["opcoes".$count]." ".$_SESSION["eou".$count]." ";
        }
        else if ($_SESSION["condicao".$count]  == "setplaystep") {
           $condIf[$count] = " setPlay->getCurrentStepNumber() ".$_SESSION["operador".$count]." ".$_SESSION["opcoes".$count]." ".$_SESSION["eou".$count]." ";
        }
        else if ($_SESSION["condicao".$count]  == "bolaParada") {
           $condIf[$count] = $_SESSION["not".$count]."setPlay->isBallStopped() ".$_SESSION["eou".$count]." ";
        }
        else if ($_SESSION["condicao".$count]  == "situacaoEspecial") {
           $condIf[$count] = $_SESSION["not".$count]."field->isOnSpecialAreas(actualPosition->getScreenPoint()) ".$_SESSION["eou".$count]." ";
        }
    }
}

//ORGANIZA AS VARÁVEIS DE CONDIÇÃO ESPECÍFICA DA PRIMEIRA LINHA DO BLOCO 2
if(isset($_SESSION["condicaoIn"])) {
    if ($_SESSION["condicaoIn"]  == "situacao"){
       $condIfInPrincipal = "situation ".$_SESSION["operadorIn"]." ".$_SESSION["opcoesIn"]." ".$_SESSION["eouIn"]." ";
    }
    else if ($_SESSION["condicaoIn"]  == "setplaystep") {
       $condIfInPrincipal = " setPlay->getCurrentStepNumber() ".$_SESSION["operadorIn"]." ".$_SESSION["opcoesIn"]." ".$_SESSION["eouIn"]." ";
    }
    else if ($_SESSION["condicaoIn"]  == "bolaParada") {
       $condIfInPrincipal = $_SESSION["notIn"]."setPlay->isBallStopped() ".$_SESSION["eouIn"]." ";
    }
    else if ($_SESSION["condicaoIn"]  == "situacaoEspecial") {
       $condIfInPrincipal = $_SESSION["notIn"]."field->isOnSpecialAreas(actualPosition->getScreenPoint()) ".$_SESSION["eouIn"]." ";
    }
}

//ORGANIZA AS VARÁVEIS DE CONDIÇÕES ESPECÍFICAS DAS OUTRAS 4 LINHAS DO BLOCO 2
$condIfIn = array();
for ($count=1;$count<=4;$count++) {

    if(isset($_SESSION["condicaoIn".$count])) {
        if ($_SESSION["condicaoIn".$count]  == "situacao"){
           $condIfIn[$count] = "situation ".$_SESSION["operadorIn".$count]." ".$_SESSION["opcoesIn".$count]." ".$_SESSION["eouIn".$count]." ";
        }
        else if ($_SESSION["condicaoIn".$count]  == "setplaystep") {
           $condIfIn[$count] = " setPlay->getCurrentStepNumber() ".$_SESSION["operadorIn".$count]." ".$_SESSION["opcoesIn".$count]." ".$_SESSION["eouIn".$count]." ";
        }
        else if ($_SESSION["condicaoIn".$count]  == "bolaParada") {
           $condIfIn[$count] = $_SESSION["notIn".$count]."setPlay->isBallStopped() ".$_SESSION["eouIn".$count]." ";
        }
        else if ($_SESSION["condicaoIn".$count]  == "situacaoEspecial") {
           $condIfIn[$count] = $_SESSION["notIn".$count]."field->isOnSpecialAreas(actualPosition->getScreenPoint()) ".$_SESSION["eouIn".$count]." ";
        }
    }
}


//MONTAGEM DO TEMPLATE DE CONDIÇÕES ESPECÍFICAS A PARTIR DAS VARIÁVEIS DE CONDIÇÕES JÁ ORGANIZADAS
if($_SESSION["condicao"]!="selecione") {
    $template_especiais= "\t\t\tif(".$condIfPrincipal.$condIf[1].$condIf[2].$condIf[3].$condIf[4].") {".PHP_EOL;
    if($_SESSION["condicaoIn"]!="selecione") {
        $template_especiais=$template_especiais."\t\t\t\tif(".$condIfInPrincipal.$condIfIn[1].$condIfIn[2].$condIfIn[3].$condIfIn[4].") {".PHP_EOL;
    }
    $template_especiais=$template_especiais."\t\t\t\t\tmenu.removeAction(".$_SESSION['comportamento']."Action);".PHP_EOL;
    if($_SESSION["condicaoIn"]!="selecione") {
        $template_especiais=$template_especiais."\t\t\t\t}".PHP_EOL;
    }
   $template_especiais=$template_especiais."\t\t\t}".PHP_EOL;
}

$template_log="File name:     spplayer.cpp".PHP_EOL."Located in:         splanner\setPlayGUI".PHP_EOL;


//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spplayer.cpp','r+');
if ($arquivo) {
    $string6="";
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_Menu/", $linha)) {
            if (isset($_SESSION['destpoint'])                           &&
                strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string6.= $linha;
                }             
            else {
                $string6 .= str_replace("@@_newAction_Menu", "@@_newAction_Menu".PHP_EOL.$template_action, $linha);
                $template_log .="\t- tag: @@_newAction_Menu".PHP_EOL;
            }
        }

        else if(preg_match("/@@_newAction_passRegion_menu/", $linha)) {
            if (isset($_SESSION['destpoint'])                           &&
                strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {

                    $string6 .= str_replace("@@_newAction_passRegion_menu", "@@_newAction_passRegion_menu".PHP_EOL.$template_menu_passRegion, $linha);
                    $template_log .="\t- tag: @@_newAction_passRegion_menu".PHP_EOL;

            }
            else {
                $string6.= $linha;
            }
        }

        else if(preg_match("/@@_newAction_insertMenu_passRegion/", $linha)) {
            if (isset($_SESSION['destpoint'])                           &&
                strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {
                $string6 .= str_replace("@@_newAction_insertMenu_passRegion", "@@_newAction_insertMenu_passRegion".PHP_EOL.$template_insertMenu_passRegion, $linha);
                $template_log .="\t- tag: @@_newAction_insertMenu_passRegion".PHP_EOL;
            }
            else {
                $string6.= $linha;
            }
        }

        
        else if(preg_match("/@@_newAction_Ball/", $linha)) { 
            if (strcmp($_SESSION['posse'], "comBola")==0) {
                if (isset($_SESSION['destpoint'])                           &&
                    isset($_SESSION['passe'])                               &&
                    strcmp($_SESSION['destpointType'],  "region")        ==0) {
                        $string6.= $linha;
                } 
                else {
                    //se nova ação é com bola ação é removida do menu !BallHolder
                    $string6 .= str_replace("@@_newAction_Ball", "@@_newAction_Ball".PHP_EOL.$template_menu, $linha);
                    $template_log .="\t- tag: @@_newAction_Ball".PHP_EOL;
                }
            }
            else
                $string6.= $linha;
        } 
        else if((preg_match("/@@_newAction_Specific_NoBall/", $linha)) && ($_SESSION["condicao"]!="selecione")) { 
            if (strcmp($_SESSION['posse'], "semBola")==0) {
                //se nova ação é com bola ação é removida do menu !BallHolder
                $string6 .= str_replace("@@_newAction_Specific_NoBall", "@@_newAction_Specific_NoBall".PHP_EOL.$template_especiais, $linha);
                $template_log .="\t- tag: @@_newAction_Specific_NoBall".PHP_EOL;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_noBall/", $linha)) { 
            if (strcmp($_SESSION['posse'], "semBola")==0) {              
                //se nova ação é sem bola ação é removida do menu BallHolder
                $string6 .= str_replace("@@_newAction_noBall", "@@_newAction_noBall".PHP_EOL.$template_menu, $linha);
                $template_log .="\t- tag: @@_newAction_noBall".PHP_EOL;
            }
            else
                $string6.= $linha;
        } 
        else if((preg_match("/@@_newAction_SpecificBall/", $linha)) && ($_SESSION["condicao"]!="selecione")) { 
            if (strcmp($_SESSION['posse'], "comBola")==0) {                
                //se nova ação é com bola ação é removida do menu !BallHolder
                $string6 .= str_replace("@@_newAction_SpecificBall", "@@_newAction_SpecificBall".PHP_EOL.$template_especiais, $linha);
                $template_log .="\t- tag: @@_newAction_SpecificBall".PHP_EOL;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_ghost/", $linha)) {
                if (isset($_SESSION['destpoint'])                           &&
                strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {
                    $string6.= $linha;
                }
                else {
                    //toda ação é removida do ghost, exeto addPlayer que retorna o jogador do modo ghost
                    $string6 .= str_replace("@@_newAction_ghost", "@@_newAction_ghost".PHP_EOL.$template_menu, $linha);
                    $template_log .="\t- tag: @@_newAction_ghost".PHP_EOL;
                }                 
        }


        else if(preg_match("/@@_newAction_genericDraw/", $linha)) {
             if (isset($_SESSION['destpoint'])) {

                if (strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                    isset($_SESSION['passe'])                               && 
                    strcmp($_SESSION['destpointType'],  "region")        ==0) {
                        $string6.= $linha;
                }
                
                else {
                    //Caso o usuário precise definir destpoint da ação no campo
                    $string6 .= str_replace("@@_newAction_genericDraw", "@@_newAction_genericDraw".PHP_EOL.$template_draw, $linha);
                    $template_log .="\t- tag: @@_newAction_genericDraw".PHP_EOL;
                }
            }
            else if (!isset($_SESSION['destpoint'])) {
            //caso o usuário não precise definir destpoint da ação no campo
                $string6 .= str_replace("@@_newAction_genericDraw", "@@_newAction_genericDraw".PHP_EOL.$template_drawLocal, $linha);
                $template_log .="\t- tag: @@_newAction_genericDraw".PHP_EOL;
            }
        }


        else if(preg_match("/@@_newAction_passRegion_genericDraw/", $linha)) {
            echo "draw";
            if (isset($_SESSION['destpoint'])                           &&
                strcmp($_SESSION['posse'],      "comBola")          ==0 && 
                isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {    
                $string6 .= str_replace("@@_newAction_passRegion_genericDraw", "@@_newAction_passRegion_genericDraw".PHP_EOL.$template_genericDraw_PassRegion, $linha);
                $template_log .="\t- tag: @@_newAction_passRegion_genericDraw".PHP_EOL;
            }
            else {
                $string6.= $linha;
            }
        }


        else if(preg_match("/@@_newAction_comPasse/", $linha)) {    //SEM POSSE NO NEXT STEP
            echo "com passe";
            if (strcmp($_SESSION['posse'], "comBola")==0) {
                if (isset($_SESSION['passe']) ) {
                    //Caso o usuário precise definir destpoint da ação no campo
                    $string6 .= str_replace("@@_newAction_comPasse", "@@_newAction_comPasse".PHP_EOL.$template_trasition, $linha);
                    $template_log .="\t- tag: @@_newAction_comPasse".PHP_EOL;
                }
                else
                $string6.= $linha;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_gol/", $linha)) { 
            echo "gol";
            if (strcmp($_SESSION['posse'], "comBola")==0 && isset($_SESSION['gol'])) {
            //se nova ação é com posse de bola, e com lance à gol, o jogador perde a posse de bola, a bola sai do jogo
                $string6 .= str_replace("@@_newAction_gol", "@@_newAction_gol".PHP_EOL.$template_gol, $linha);
                $template_log .="\t- tag: @@_newAction_gol".PHP_EOL;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_semPasse/", $linha)) {   //COM POSSE NO NEXT STEP
            echo "sem passe";
            if (strcmp($_SESSION['posse'], "comBola")==0 && !isset($_SESSION['gol']) ) {
                if (   ( !isset($_SESSION['passe']) ) 
                    || ( !isset($_SESSION['destpoint']) ) ) { 
                    //Caso o usuário precise definir destpoint da ação no campo
                    $string6 .= str_replace("@@_newAction_semPasse", "@@_newAction_semPasse".PHP_EOL.$template_trasition, $linha);
                    $template_log .="\t- tag: @@_newAction_semPasse".PHP_EOL;
                }
                else
                $string6.= $linha;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_movePosition/", $linha)) {  //JOGADOR VAI PARA O DESTPOINT NO NEXTSTEP
            echo "move position";
            if (   (isset($_SESSION['destpoint']))
                && (!isset($_SESSION['passe']))  ) { 
                                                                //Caso o usuário precise definir destpoint
                                                                //da ação no campo
                $string6 .= str_replace("@@_newAction_movePosition", "@@_newAction_movePosition".PHP_EOL.$template_trasition, $linha);
                $template_log .="\t- tag: @@_newAction_movePosition".PHP_EOL;
            }
            else
                $string6.= $linha;
        }
        else if(preg_match("/@@_newAction_keepPosition/", $linha)) { //JOGADOR MANTEM A POSIÇÃO NO NEXTSTEP
            echo "keep position";
            if ((  ( isset($_SESSION['destpoint']) )
                && ( isset($_SESSION['passe']) )  )
                || ( !isset($_SESSION['destpoint']) )  ) { 
                                                                //Caso o usuário precise definir destpoint
                                                               //da ação no campo
                $string6 .= str_replace("@@_newAction_keepPosition", "@@_newAction_keepPosition".PHP_EOL.$template_trasition, $linha);
                $template_log .="\t- tag: @@_newAction_keepPosition".PHP_EOL;
            }
            else
                $string6.= $linha;
        }


        /*          ANTES DE TIRAR O ATRIBUTO TRANSITION TAB
        else if(preg_match("/@@_newAction_Dialog/", $linha)) { 
            if (!isset($_SESSION['transicao']) ) {        //se nova ação é com bola
                                                                    //ação é removida do menu !BallHolder
                $string6 .= str_replace("@@_newAction_Dialog", "@@_newAction_Dialog".PHP_EOL.$template_dialog, $linha);
                $template_log .="\t- tag: @@_newAction_Dialog".PHP_EOL;
            }
            else
                $string6.= $linha;
        }
        */

        else if(preg_match("/@@_newAction_Dialog/", $linha)) {
            if (isset($_SESSION['destpoint'])                           &&
                !isset($_SESSION['passe'])                               &&
                strcmp($_SESSION['destpointType'],  "region")        ==0) {    
                $string6.= $linha;
            }
            else {                                                  //ação é removida do menu !BallHolder
                $string6 .= str_replace("@@_newAction_Dialog", "@@_newAction_Dialog".PHP_EOL.$template_dialog, $linha);
                $template_log .="\t- tag: @@_newAction_Dialog".PHP_EOL;
            }
        }


        else {
            // vai colocando tudo numa nova string
            $string6.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string6)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spplayer.cpp','r');
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


header("Location: http://localhost/Gerador/templates/geradorSetplayActionH.php?totalInserido=".$_GET["totalInserido"]);
