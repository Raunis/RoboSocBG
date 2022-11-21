<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.


//Hold
//Corresponde ao $template_porting2 antigo
$type_template_local="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
    }
"
;

//Dribble
//$template_porting2
$type_template_move="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        const fcportugal::setplay::Region * reg = ((ActPos *) act)->getRegion();
        if(dynamic_cast<const RegPoint*>(reg))
            newAction->setSpDest(regionToSpPoint(reg));
    }
"
;

//DefMark
//$template_porting2
$type_template_mark=" else if(actionType == '".$_SESSION['actionType']."')
    {

        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        ActDefMark* defMark = dynamic_cast<ActDefMark*>(act);
        SpPlayer* player = playerReferenceToSpPlayer(defMark->getDestPlayer());
        newAction->setDestPlayer(player);
       
    }";
/*
DURANTE ESTUDO
$type_template_mark=" else if(actionType == '".$_SESSION['actionType']."')
    {

        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        Act".$_SESSION['comportamento']."* clang".$_SESSION['comportamento']." = dynamic_cast<Act".$_SESSION['comportamento']."*>(act);
        SpPlayer* player = playerReferenceToSpPlayer(clang".$_SESSION['comportamento']."->getDestPlayer());
        newAction->setDestPlayer(player);
       
    }";
*/



//referencia ao longKick foi passada pelo dribble, verificar com Jadson por que no SPLANNER DEV do bitbucket o longKick  foi adicionado junto ao passfoward (ele so usa a regiao como referencia - relativamente simples)
//dribble
//$template_porting2
$type_template_passReg="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        const fcportugal::setplay::Region * reg = ((ActPos *) act)->getRegion();
        if(dynamic_cast<const RegPoint*>(reg))
            newAction->setSpDest(regionToSpPoint(reg));
    }
";


//Pass
//$template_porting2
$type_template_passPlayer="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        const vector<const PlayerReference*> prVector = ((ActPass *) act)->getPlayers();//JAF2014
        const PlayerReference * pr = prVector.front();//JAF2014
        SpPlayer * playerToPass = playerReferenceToSpPlayer(pr);
        
         /*  MODELO DO COMPORTAMENTO PASS PARA VERIFICAR ERROS DE TRANSIÇÃO

        QString identification = \"\";
        //  PlayerRole * pl_r=(PlayerRole *)(pr);
        //        if( pl_r!=NULL)
        if( dynamic_cast<PlayerRole*>(const_cast<PlayerReference*>(pr)) )//JAF2014 no problem using const_cast, not altering pr!
        {
        PlayerRole * pl_r=(PlayerRole *)(pr);
            identification = QString(pl_r->roleName().c_str());
        }
        else
            identification = \" with number \" + QString::number(((PlayerID *) pr)->number );
        if(!playerToPass)
        {
            error = \" Error generating action pass on transition between \" +
                    QString::number(t->getSource()->getIdNumber()) + \" and \" +
                    QString::number(t->getDest()->getIdNumber()) + \":\\n\" +
                    + \"\\nPlayer \" + identification + \" doesn't have be referenced before on setplay participants, so cann't receive the pass!\"
                    + \"\\n\\n Resolution: manually verify and correct the error... it's about changing player name or number of target player of action in \"
                    + \"transition from step \"+ QString::number(t->getSource()->getIdNumber()) + \" to \"
                    + QString::number(t->getDest()->getIdNumber());
            return false;
        }

        */

        newAction->setDestPlayer(playerToPass);
    }
";





//Corresponde ao $template_porting1 antigo
$template_local="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        return new Act".$_SESSION['comportamento']."();
    }
"
;

//$template_porting1
$template_move="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        fcportugal::setplay::Region *region = spPointToRegion(spAction->getSpDest());
        return new Act".$_SESSION['comportamento']."(region);
    }
"
;

//$template_porting1
$template_mark="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
       const PlayerReference* destPlayer=spPlayerToPlayerReference(spAction->getDestActor());
       return new Act".$_SESSION['comportamento']."(destPlayer);
    }";


//referencia ao longKick foi passada pelo dribble, verificar com Jadson por que no SPLANNER DEV do bitbucket o longKick  foi adicionado junto ao passfoward (ele so usa a regiao como referencia - relativamente simples)
//$template_porting1
$template_passReg="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        fcportugal::setplay::Region *region = spPointToRegion(spAction->getSpDest());
        return new Act".$_SESSION['comportamento']."(region);
    }
";

//$template_porting1
$template_passPlayer="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        SpPlayer *dest = spAction->getDestActor();
        vector<const PlayerReference *> * players = new vector<const PlayerReference *>();
        players->push_back(spPlayerToPlayerReference (dest));
        return new Act".$_SESSION['comportamento']."(*players);
    }
";


//TEMPLATES ANTIGOS (PRIMEIRA VERSÃO DO GERADOR)
$template_porting1="
\telse if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
    }";

$template_porting2="
\telse if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
    }";


$template_log="File name:     spfcportugalporting.cpp".PHP_EOL."Located in:         splanner\setPlayGUI\portingclasses".PHP_EOL;


//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/portingClasses/spfcportugalporting.cpp','r+');
if ($arquivo) {
    $string5="";
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado


        if(preg_match("/@@_newAction1/", $linha)) {

            //if (strcmp($_SESSION['passe'],      "comPasse")         ==0) { 
            //if (strcmp($_SESSION['passe'],      "semPasse")         ==0) {

            if (isset($_SESSION['destpoint'])) {
                
                if (strcmp($_SESSION['posse'],      "comBola")          ==0) {
                    if (isset($_SESSION['passe']) ) {

                        if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                            $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_passReg, $linha);
                            $template_log .="\t- tag: @@_newAction1".PHP_EOL;
                        }
                        else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                            $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_passPlayer, $linha);
                            $template_log .="\t- tag: @@_newAction1".PHP_EOL;
                        }
                    }
                    else if (!isset($_SESSION['passe']) ) {
                        $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_move, $linha);
                        $template_log .="\t- tag: @@_newAction1".PHP_EOL;
                    }
                }
                    

                else if (strcmp($_SESSION['posse'],      "semBola")          ==0) {
                    if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                        $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_move, $linha);
                        $template_log .="\t- tag: @@_newAction1".PHP_EOL;
                    }
                    else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                        $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_mark, $linha);
                        $template_log .="\t- tag: @@_newAction1".PHP_EOL;
                    }
                }
            }
            
            else if (!isset($_SESSION['destpoint'])) {
                $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_local, $linha);
                $template_log .="\t- tag: @@_newAction1".PHP_EOL;
            }
            //Alternativa se não for nenhum deles, precisa?
            else {
                $string5 .= str_replace("@@_newAction1", "@@_newAction1".PHP_EOL.$template_c, $linha);
                $template_log .="\t- tag: @@_newAction1".PHP_EOL;
            }
        }


   
        else if(preg_match("/@@_newAction2/", $linha)) {



            //if (strcmp($_SESSION['passe'],      "comPasse")         ==0) { 
            //if (strcmp($_SESSION['passe'],      "semPasse")         ==0) {

            if (isset($_SESSION['destpoint'])) {
                
                if (strcmp($_SESSION['posse'],      "comBola")          ==0) {
                    if (isset($_SESSION['passe']) ) {
                        if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                            $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_passReg, $linha);
                            $template_log .="\t- tag: @@_newAction2".PHP_EOL;
                        }
                        else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                            $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_passPlayer, $linha);
                            $template_log .="\t- tag: @@_newAction2".PHP_EOL;
                        }
                    }
                    if (!isset($_SESSION['passe']) ) {
                        $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_move, $linha);
                        $template_log .="\t- tag: @@_newAction2".PHP_EOL;
                    }
                }
                    

                else if (strcmp($_SESSION['posse'],      "semBola")          ==0) {
                    if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                        $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_move, $linha);
                        $template_log .="\t- tag: @@_newAction2".PHP_EOL;
                    }
                    else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                        $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_mark, $linha);
                        $template_log .="\t- tag: @@_newAction2".PHP_EOL;
                    }
                }
            }
            
            else if (!isset($_SESSION['destpoint'])) {
                $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$type_template_local, $linha);
                $template_log .="\t- tag: @@_newAction2".PHP_EOL;
            }
            //Alternativa se não for nenhum deles, precisa?
            else {
                $string5 .= str_replace("@@_newAction2", "@@_newAction2".PHP_EOL.$template_c, $linha);
                $template_log .="\t- tag: @@_newAction2".PHP_EOL;
            }
        }
        //checkbox Generate Clang
        //}
        else {
            // vai colocando tudo numa nova string
            $string5.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string5)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE

//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/portingClasses/spfcportugalporting.cpp','r');
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
header("Location: http://localhost/Gerador/templates/geradorSpplayer.php?totalInserido=".$_GET["totalInserido"]);
