<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.\ 

//Hold
$type_template_local="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
    }
"
;

//Dribble
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
$type_template_mark=" else if(actionType == '".$_SESSION['actionType']."')
    {

        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        ActDefMark* defMark = dynamic_cast<ActDefMark*>(act);
        SpPlayer* player = playerReferenceToSpPlayer(defMark->getDestPlayer());
        newAction->setDestPlayer(player);
       
    }";


//referencia ao longKick foi passada pelo dribble, verificar com Jadson por que no SPLANNER DEV do bitbucket o longKick  foi adicionado junto ao passfoward (ele so usa a regiao como referencia - relativamente simples)
$type_template_passReg="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::dribble;
        newAction = new SpAction(p, type, spSetPlay->getField());
        const fcportugal::setplay::Region * reg = ((ActPos *) act)->getRegion();
        if(dynamic_cast<const RegPoint*>(reg))
            newAction->setSpDest(regionToSpPoint(reg));
    }
";


//Pass
$type_template_passPlayer="else if(actionType == '".$_SESSION['actionType']."')
    {
        type = SpAction::".$_SESSION['comportamento'].";
        newAction = new SpAction(p, type, spSetPlay->getField());
        const vector<const PlayerReference*> prVector = ((ActPass *) act)->getPlayers();//JAF2014
        const PlayerReference * pr = prVector.front();//JAF2014
        SpPlayer * playerToPass = playerReferenceToSpPlayer(pr);
        newAction->setDestPlayer(playerToPass);
    }
";






$template_local="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        return new Act".$_SESSION['comportamento']."();
    }
"
;

$template_move="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        fcportugal::setplay::Region *region = spPointToRegion(spAction->getSpDest());
        return new Act".$_SESSION['comportamento']."(region);
    }
"
;


$template_mark="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
       const PlayerReference* destPlayer=spPlayerToPlayerReference(spAction->getDestActor());
       return new Act".$_SESSION['comportamento']."(destPlayer);
    }";


//referencia ao longKick foi passada pelo dribble, verificar com Jadson por que no SPLANNER DEV do bitbucket o longKick  foi adicionado junto ao passfoward (ele so usa a regiao como referencia - relativamente simples)
$template_passReg="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        fcportugal::setplay::Region *region = spPointToRegion(spAction->getSpDest());
        return new Act".$_SESSION['comportamento']."(region);
    }
";


$template_passPlayer="else if(spAction->getType() == SpAction::".$_SESSION['comportamento'].")
    {
        SpPlayer *dest = spAction->getDestActor();
        vector<const PlayerReference *> * players = new vector<const PlayerReference *>();
        players->push_back(spPlayerToPlayerReference (dest));
        return new Act".$_SESSION['comportamento']."(*players);
    }
";



$template_padrao="Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(hold\") >> *space_p>>')';

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        out=in.substr(result.length);
        return new Act".$_SESSION['comportamento']."();
    }
    out=in;
    return NULL;
}";


$template_c="const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    
}

bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
}

void Act".$_SESSION['comportamento']."::print(std::ostream& out) const{ 
    
}

void Act".$_SESSION['comportamento']."::printPretty(std::ostream& out, 
        const std::string& line_header) const{
    
}

Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    
}";

$template_parse="\tres=Act".$_SESSION['comportamento']."::parse(in,out,parameters,players);
    if(res) return res;";

$template_log="_________ClangAction.cc  -  fcportugalsplanner\libs\libsetplay\setplay ".PHP_EOL;


//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.cc','r+');
if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_geradorParse/", $linha)) {
            $string2 .= str_replace("@@_newAction_geradorParse", "@@_newAction_geradorParse".PHP_EOL.$template_parse, $linha);
            $template_log .="\t- tag: @@_newAction_geradorParse".PHP_EOL;
        } 
        //checkbox Generate Clang
        //else if (isset($_SESSION['clang'])) {
            if(preg_match("/@@_newAction_class/", $linha)) {



                //if (strcmp($_SESSION['passe'],      "comPasse")         ==0) { 
                //if (strcmp($_SESSION['passe'],      "semPasse")         ==0) {

                if (strcmp($_SESSION['destpoint'],  "acaoComDestino")   ==0) {
                    
                    if (strcmp($_SESSION['posse'],      "comBola")          ==0) {
                        if (strcmp($_SESSION['passe'],      "comPasse")         ==0) {
                            if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                                $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passReg, $linha);
                                $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                            }
                            else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                                $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passPlayer, $linha);
                                $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                            }
                        }
                        if (strcmp($_SESSION['passe'],      "semPasse")         ==0) {
                            $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_move, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                    }
                        

                    else if (strcmp($_SESSION['posse'],      "semBola")          ==0) {
                        if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                            $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_move, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                        else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                            $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_mark, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                    }
                }
                
                else if (strcmp($_SESSION['destpoint'],  "acaoLocal")        ==0) {
                    $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_padrao, $linha);
                    $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                }
                else {
                    $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_c, $linha);
                    $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                }
            }
        //checkbox Generate Clang
        //}
        else {
            // vai colocando tudo numa nova string
            $string2.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string2)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.cc','r');
$linhas_final=0;
while(true) {
    $linha = fgets($arquivo);
    if ($linha==null) break;
    $linhas_final++;
}

//ATUALIZA A VARIÁVEL DE CONTAGEM DE LINHAS INSERIDAS, COLOQUEI ESSA VARIÁVEL FORA DA SESSION POR QUE
//ELA NÃO VEM DO FORM, ESSA CONTAGEM É INCREMENTADA A CADA ARQUIVO ALTERADO
$_GET["totalInserido"]+=($linhas_final-$linhas);


//Escrita do log
$arquivo = fopen('../log/alteracoes'.$_SESSION["comportamento"].'.txt','a+');
if ($arquivo) {
    fwrite ($arquivo,$template_log);
    fwrite ($arquivo,"Total inserido neste arquivo:".($linhas_final-$linhas).PHP_EOL.PHP_EOL);
}
fclose($arquivo);

//Redireciona para pagina inicial
header("Location: http://localhost/Gerador/templates/geradorSpaction.php?totalInserido=".$_GET["totalInserido"]);
