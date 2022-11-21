<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.\ 


$template_local="Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(".$_SESSION['comportamento']."\") >> *space_p>>')';

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        out=in.substr(result.length);
        return new Act".$_SESSION['comportamento']."();
    }
    out=in;
    return NULL;
}

bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
    //TODO

    return true;
}


const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    if(!isAccomplished(p,world))
        return this;
    else
        return NULL;
}"
;





$template_move="Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(".$_SESSION['comportamento']."\") >> *space_p >> \":region\" >> *space_p;

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        string rest;

        //Must parse region
        Region* reg= Region::parse(in.substr(result.length),rest,parameters,players);

        if(reg){
            //Check for the final ')'
            result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>')',
                    nothing_p);
            if(result.hit){
                out=rest.substr(result.length);
                return new Act".$_SESSION['comportamento']."(reg);
            }
        }
    }
    out=in;
    return NULL;
}


bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
    //TODO

    return true;
}


const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    if(!isAccomplished(p,world))
        return this;
    else
        return NULL;
}


void Act".$_SESSION['comportamento']."::print( std::ostream& out ) const{ 
    out << \"(".$_SESSION['comportamento']." :region \";
    if( getRegion() == NULL )
        out << \"(null)\";
    else
        getRegion()->print(out);
    out << \")\";
}


void Act".$_SESSION['comportamento']."::printPretty(std::ostream& out,
        const std::string& line_header) const{
    out << line_header << \"".$_SESSION['comportamento']." to region:\" << std::endl;
    if( getRegion() == NULL )
        out << line_header << \" (null)\\n\";
    else
        getRegion()->printPretty( out, line_header + \" \" );
}
"
;


$template_mark="Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(".$_SESSION['comportamento']."\") >> *space_p >> \":players\" ;

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        string rest;

        //Must parse players. Amount is not pre-defined
        // To store the players
        vector<PlayerReference*> players_=
                PlayerReference::parsePlayerList(in.substr(result.length), rest,
                        parameters,players);
        if(players_.size()>0){
            //Check for the final '))'
            result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),
                    *space_p>>')',
                    nothing_p);
            if(result.hit){
                out=rest.substr(result.length);

                return new Act".$_SESSION['comportamento']."(PlayerReference::toVectorConstPlayerReference(players_));
            }
        }
    }
    out=in;
    return NULL;
}



bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
    //TODO

    return true;
}


const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    if(!isAccomplished(p,world))
        return this;
    else
        return NULL;
}


const vector<const PlayerReference*>& Act".$_SESSION['comportamento']."::relevantPlayers() const{
    return M_players;
}

Action* Act".$_SESSION['comportamento']."::deepCopy(const vector<SetplayParameter*>& params,
        const vector<PlayerReference*>& players) const{
    vector<const PlayerReference*>* players_new= new vector<const PlayerReference*>;

    for(unsigned int i =0; i!= M_players.size();i++)
        players_new->push_back((PlayerReference*)M_players.at(i)
                ->deepCopy(params,players));
    return new Act".$_SESSION['comportamento']."(*players_new,type);
}

Action* Act".$_SESSION['comportamento']."::inversion(const vector<SetplayParameter*>& params,
        const vector<PlayerReference*>& players) const{
    return deepCopy(params,players);
}

void
Act".$_SESSION['comportamento']."::print( std::ostream& out ) const{
    out << \"(".$_SESSION['comportamento']." :players (list \";
    for(unsigned int i = 0; i!= M_players.size(); i++){
        M_players.at(i)->print(out);
        out<<\" \";
    }
    out << \"))\";
}


void Act".$_SESSION['comportamento']."::printPretty(std::ostream& out,
        const std::string& line_header) const{
    out << line_header
            << \"".$_SESSION['comportamento']." player(s) \";

    for(unsigned int i = 0; i!= M_players.size(); i++){
        M_players.at(i)->print(out);
        out<<\" \";
    }
    out << std::endl;
}
";




//ActForward::print
//void ActLongKick::printPretty
$template_passReg="Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(".$_SESSION['comportamento']."\") >> *space_p >> \":region\" >> *space_p;

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        string rest;

        //Must parse region
        Region* reg= Region::parse(in.substr(result.length), rest,parameters,players);

        //Check for type
        string type_;
        result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),
                *space_p>>\":type\">>*space_p
                >>identifier_p[assign_a(type_)],
                nothing_p);


        BallMoveType typeAttrib=undefinedBallMove;
        if(result.hit){


            if(type_==\"normal\") typeAttrib=normalBallMove;
            else if(type_==\"fast\") typeAttrib=fastBallMove;
            else if(type_==\"slow\") typeAttrib=slowBallMove;
            else{
                return NULL;
            }
            rest=rest.substr(result.length);
        }

        if(reg){
            //Check for the final ')'
            result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>')',
                    nothing_p);
            if(result.hit){
                out=rest.substr(result.length);
                return new Act".$_SESSION['comportamento']."(reg,typeAttrib);
            }
        }
    }
    out=in;
    return NULL;
}


bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
    //TODO

    return true;
}


const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    if(!isAccomplished(p,world))
        return this;
    else
        return NULL;
}


void
Act".$_SESSION['comportamento']."::print( std::ostream& out ) const 
{
    out << \"(".$_SESSION['comportamento']." :region \";
    if( m_reg == NULL )
        out << \"(null)\";
    else
        m_reg->print(out);
    

    switch(m_bm){
    case fastBallMove:
        out<<\" :type fast\";
        break;
    case slowBallMove:
        out<<\" :type slow\";
        break;
    case undefinedBallMove:
    case normalBallMove:
        out<<\" :type normal\";
        break;
    }
    out<< \")\";
}



void
Act".$_SESSION['comportamento']."::printPretty( std::ostream& out,
        const std::string& line_header ) const
{
    out << line_header << \"ball to: use \" ;

    switch(m_bm){
    case fastBallMove:
        out<<\" fast\";
        break;
    case slowBallMove:
        out<<\" slow\";
        break;
    case undefinedBallMove:
    case normalBallMove:
        out<<\" normal\";
    }

    out<< \" to go to:\" << std::endl;
    if( m_reg == NULL )
        out << line_header << \" (null)\\n\";
    else
        m_reg->printPretty( out, line_header + \" \" );

}

Act".$_SESSION['comportamento']."::Act".$_SESSION['comportamento']."( const Region* const reg, 
        const BallMoveType& bm )
: Action(),
  m_reg(reg),
  m_bm( bm )
{}

Act".$_SESSION['comportamento']."::~Act".$_SESSION['comportamento']."()
{}

const Region* Act".$_SESSION['comportamento']."::getRegion() const
{ return m_reg; }

fcportugal::setplay::BallMoveType
Act".$_SESSION['comportamento']."::ballMoveType() const
{ return m_bm; }


";







$template_passPlayer="
    Act".$_SESSION['comportamento']."::Act".$_SESSION['comportamento']."(const vector<const PlayerReference*>& players,BallMoveType type_ )
:Action(),M_players( players ),type(type_){}

    Act".$_SESSION['comportamento']."::~Act".$_SESSION['comportamento']."(){}

    
    Action* Act".$_SESSION['comportamento']."::parse(const string& in, string& out,
        const vector<SetplayParameter*>& parameters,
        const vector<PlayerReference*>& players){
    rule<> act_p
    = *space_p >> str_p(\"(".$_SESSION['comportamento']."\") >> *space_p >> \":players\";

    parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,
            nothing_p);

    if(result.hit){
        string rest;

        //Must parse players. Amount is not pre-defined
        //Will parse the firs one, is mandatory
        // To store the players
        vector<PlayerReference*> players_ =
                PlayerReference::parsePlayerList(in.substr(result.length), rest,
                        parameters,players);
        if(players_.size()>0){
            //Check for type
            string type_;
            result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),
                    *space_p>>\":type\">>*space_p
                    >>identifier_p[assign_a(type_)],
                    nothing_p);


            BallMoveType typeAttrib=undefinedBallMove;
            if(result.hit){
                if(type_==\"normal\") typeAttrib=normalBallMove;
                else if(type_==\"fast\") typeAttrib=fastBallMove;
                else if(type_==\"slow\") typeAttrib=slowBallMove;
                else{
                    return NULL;
                }
                rest=rest.substr(result.length);
            }


            //Check for the final ')'
            result = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),
                    *space_p>>')',
                    nothing_p);
            if(result.hit){
                out=rest.substr(result.length);
                // create const vector

                return new Act".$_SESSION['comportamento']."(PlayerReference::toVectorConstPlayerReference(players_),typeAttrib);
            }
            else
                cerr<<\"SP: ununderstood rest in pass parse:\"<<rest<<endl;
        }
    }
    out=in;
    return NULL;
}

bool Act".$_SESSION['comportamento']."::isAccomplished(const PlayerID& p,
        const Context& world) const{
    //TODO

    return true;
}


const Action* Act".$_SESSION['comportamento']."::necessaryAction(const PlayerID& p,
        const Context& world) const{
    if(!isAccomplished(p,world))
        return this;
    else
        return NULL;
}

const vector<const PlayerReference*>&
Act".$_SESSION['comportamento']."::getPlayers() const {
    return M_players; }

const vector<const PlayerReference*>& Act".$_SESSION['comportamento']."::relevantPlayers() const{
    return M_players;
}


Action* Act".$_SESSION['comportamento']."::deepCopy(const vector<SetplayParameter*>& params,
        const vector<PlayerReference*>& players) const{
    vector<const PlayerReference*>* players_new= new vector<const PlayerReference*>;

    for(unsigned int i =0; i!= M_players.size();i++)
        players_new->push_back((PlayerReference*)M_players.at(i)
                ->deepCopy(params,players));
    return new Act".$_SESSION['comportamento']."(*players_new,type);
}

Action* Act".$_SESSION['comportamento']."::inversion(const vector<SetplayParameter*>& params,
        const vector<PlayerReference*>& players) const{
    return deepCopy(params,players);
}


void
Act".$_SESSION['comportamento']."::print( std::ostream& out ) const
{ out << \"(".$_SESSION['comportamento']." :players (list \";
for(unsigned int i = 0; i!= M_players.size(); i++){
    M_players.at(i)->print(out);
    out<<\" \";
}
out<< \")\";

switch(type){
case normalBallMove: out<<\" :type normal\";
break;
case fastBallMove: out<<\" :type fast\";
break;
case slowBallMove:
case undefinedBallMove:
    out<<\" :type slow\";
    break;
}
out<< \")\";
}

void Act".$_SESSION['comportamento']."::printPretty( std::ostream& out,
        const std::string& line_header) const
{
    out << line_header << \"ball to players: \" ;
    for(unsigned int i = 0; i!= M_players.size(); i++){
        M_players.at(i)->print(out);
        out<<\" \";
    }

    switch(type){
    case normalBallMove: out<<\" :type normal\";
    break;
    case fastBallMove: out<<\" :type fast\";
    break;
    case slowBallMove:
    case undefinedBallMove:
        out<<\" :type slow\";
    }
    out << std::endl;
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

$template_log="File name:     ClangAction.cc".PHP_EOL."Located in:         splanner\libs\libsetplay\setplay".PHP_EOL;


//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.cc','r+');
if ($arquivo) {
    $string2="";
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_geradorParse/", $linha)) {
            $string2 .= str_replace("@@_newAction_geradorParse", "@@_newAction_geradorParse".PHP_EOL.$template_parse.PHP_EOL, $linha);
            $template_log .="\t- tag: @@_newAction_geradorParse".PHP_EOL;
        } 
        //checkbox Generate Clang
        //else if (isset($_SESSION['clang'])) {
        else if(preg_match("/@@_newAction_class/", $linha)) {



            //if (strcmp($_SESSION['passe'],      "comPasse")         ==0) { 
            //if (strcmp($_SESSION['passe'],      "semPasse")         ==0) {

            if (isset($_SESSION['destpoint'])) {
                
                if (strcmp($_SESSION['posse'],      "comBola")          ==0) {

                    if (isset($_SESSION['passe']) ) {

                        if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                            $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passReg, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                        else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                            $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passPlayer, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                    }
                    if (!isset($_SESSION['passe']) ) {
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
            
            else if (!isset($_SESSION['destpoint'])) {
                $string2 .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_local, $linha);
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
$arquivo = fopen('../log/LOG'.$_SESSION["comportamento"].'.txt','a+');
if ($arquivo) {
    fwrite ($arquivo,$template_log);
    fwrite ($arquivo,"Total lines inserted in this file:".($linhas_final-$linhas).PHP_EOL.PHP_EOL);
}
fclose($arquivo);

//Redireciona para pagina inicial
header("Location: http://localhost/Gerador/templates/geradorSpaction.php?totalInserido=".$_GET["totalInserido"]);
