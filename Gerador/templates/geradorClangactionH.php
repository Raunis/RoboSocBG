<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor

session_start();        // iniciamos a session

$caminho_SPlanner=$_SESSION['splanner'];
$caminho_Time=$_SESSION['time'];
$_SESSION = $_POST;
$_SESSION['splanner']=  $caminho_SPlanner;
$_SESSION['time']=      $caminho_Time;

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.


//hold
$template_local="
class Act".$_SESSION['comportamento'].":public Action{
public:
    inline Act".$_SESSION['comportamento']."():Action(){}

    inline ~Act".$_SESSION['comportamento']."(){}

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);};

    //'h'
    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}

    inline void print( std::ostream& out ) const{ out << \"(".$_SESSION['comportamento'].")\"; }

    inline void
    printPretty( std::ostream& out, const std::string& line_header ) const
    { out << line_header << \"".$_SESSION['comportamento']."\" << std::endl; }


    inline virtual string label() const {return \"".$_SESSION['comportamento']."\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world) const ;

    virtual bool isAccomplished(const PlayerID& p,const Context& world) const;

    virtual const vector<const PlayerReference*>& relevantPlayers() const{return *(new vector<const PlayerReference*>());}

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*>& parameters,
            const vector<PlayerReference*>& players);

    inline virtual Action*
    deepCopy(const vector<SetplayParameter*>& /*params*/,
            const vector<PlayerReference*>& /*players*/) const{
        return new Act".$_SESSION['comportamento']."();}

    inline virtual Action*
    inversion(const vector<SetplayParameter*>& /*params*/,
            const vector<PlayerReference*>& /*players*/) const{
        return new Act".$_SESSION['comportamento']."();}

    inline virtual void
    substituteNamedRegions(const Context& /*world*/){};


};
";


//dribble
$template_move="// Act".$_SESSION['comentario']."
class Act".$_SESSION['comportamento'].":public Action{
public:
    
    inline Act".$_SESSION['comportamento']."(const Region* const reg):Action(),m_reg(reg){}

    inline ~Act".$_SESSION['comportamento']."(){}

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);    };

    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}

    void print( std::ostream& out ) const;

    void printPretty( std::ostream& out, const std::string& line_header ) const;

    inline const Region* getRegion() const { return m_reg; }

    inline virtual string label() const {return \"".$_SESSION['comportamento']."\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world) const ;

    virtual bool isAccomplished(const PlayerID& p,const Context& world) const;

    virtual const vector<const PlayerReference*>& relevantPlayers() const{
        return *(new vector<const PlayerReference*>());}

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*> &parameters,
            const vector<PlayerReference*>& players);

    inline virtual Action* deepCopy(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->deepCopy(params,players));}

    virtual Action* inversion(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->inversion(params,players));}

    inline virtual void substituteNamedRegions(const Context& world){
        m_reg->substituteNamedRegions(world);};


private:
    const Region* const m_reg;
};


// _________Fim Act".$_SESSION['comportamento'];


//mark
$template_mark="
class ActMark:public Action{
public:
    Act".$_SESSION['comportamento']."();

    Act".$_SESSION['comportamento']."(const vector<const PlayerReference*>& players);

    virtual ~Act".$_SESSION['comportamento']."();

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);};

    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}

    //virtual const PointSimple* actionPoint() const{
    //assert(false);return NULL;} //BUST: should not be called!

    virtual void print(std::ostream& out) const;

    virtual void printPretty(std::ostream& out,
            const std::string& line_header) const;

    const vector<const PlayerReference*>& getPlayers() const;

    inline virtual string label() const {return \"".$_SESSION['comportamento']."\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world) const ;

    virtual bool isAccomplished(const PlayerID& p,
            const Context& world) const;

    virtual const vector<const PlayerReference*>& relevantPlayers() const;

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*>& parameters,
            const vector<PlayerReference*>& players);

    virtual Action* deepCopy(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const;

    virtual Action* inversion(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const;

    inline virtual void
    substituteNamedRegions(const Context& /*world*/){};

private:
    const vector<const PlayerReference*> M_players;
} ;
";


//longKick
//seria um modelo melhor para o clang c?
$template_passReg="
class Act".$_SESSION['comportamento']." : public Action{
public:
    //Act".$_SESSION['comportamento']."();

    Act".$_SESSION['comportamento']."(const Region* const reg,const BallMoveType& move=undefinedBallMove);

    virtual ~Act".$_SESSION['comportamento']."();

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);};

    // 'f' for forward
    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}

    virtual void print( std::ostream& out ) const;

    virtual void printPretty( std::ostream& out,
            const std::string& line_header ) const;

    const Region* getRegion() const;

    BallMoveType ballMoveType() const;

    inline virtual string label() const {return \"".$_SESSION['comportamento']."\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world) const;

    virtual bool isAccomplished(const PlayerID& p,const Context& world) const;

    virtual const
    vector<const PlayerReference*>& relevantPlayers() const{return *(new vector<const PlayerReference*>());}

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*>& parameters,
            const vector<PlayerReference*>& players);

    inline virtual Action* deepCopy(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->deepCopy(params,players),m_bm);};

    inline virtual Action* inversion(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->inversion(params,players),m_bm);};

    inline virtual void substituteNamedRegions(const Context& world){
        m_reg->substituteNamedRegions(world);};


private:
    const Region* const m_reg;
    const BallMoveType m_bm;
};

";


//pass
$template_passPlayer="
class Act".$_SESSION['comportamento'].":public Action{
public:

    Act".$_SESSION['comportamento']."();

    Act".$_SESSION['comportamento']."(const vector<const PlayerReference*>& players ,
            BallMoveType type=normalBallMove);

    virtual ~Act".$_SESSION['comportamento']."();

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);};

    // 'y' for plaYer
    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}
    //inline virtual const PointSimple* actionPoint() const{
    //assert(false); return NULL;} //BUST: should not be called!

    virtual void print( std::ostream& out ) const;

    virtual void printPretty( std::ostream& out,
            const std::string& line_header) const;


    const vector<const PlayerReference*>& getPlayers() const;

    BallMoveType ballMoveType() const{return type;}

    inline virtual string label() const {return \"ballToPlayer\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world)const;

    virtual bool isAccomplished(const PlayerID& p,const Context& world) const;

    virtual const vector<const PlayerReference*>& relevantPlayers() const;

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*>& parameters,
            const vector<PlayerReference*>& players);

    virtual Action* deepCopy(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const;

    virtual Action* inversion(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const;

    inline virtual void
    substituteNamedRegions(const Context& /*world*/){};

private:
    const vector<const PlayerReference*> M_players;
    BallMoveType type;
} ;
";







$template_h="// Act".$_SESSION['comentario']."
class Act".$_SESSION['comportamento'].":public Action{
public:
    
    inline Act".$_SESSION['comportamento']."(const Region* const reg):Action(),m_reg(reg){}

    inline ~Act".$_SESSION['comportamento']."(){}

    inline virtual void getExecuted(Executor& executor) const{
        executor.execute(*this);    };

    inline virtual char actionType() const {return '".$_SESSION['actionType']."';}

    void print( std::ostream& out ) const;

    void printPretty( std::ostream& out, const std::string& line_header ) const;

    inline const Region* getRegion() const { return m_reg; }

    inline virtual string label() const {return \"".$_SESSION['comportamento']."\";}

    virtual const Action* necessaryAction(const PlayerID& p,
            const Context& world) const ;

    virtual bool isAccomplished(const PlayerID& p,const Context& world) const;

    virtual const vector<const PlayerReference*>& relevantPlayers() const{
        return *(new vector<const PlayerReference*>());}

    static Action* parse(const string& in, string& out,
            const vector<SetplayParameter*> &parameters,
            const vector<PlayerReference*>& players);

    inline virtual Action* deepCopy(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->deepCopy(params,players));}

    virtual Action* inversion(const vector<SetplayParameter*>& params,
            const vector<PlayerReference*>& players) const{
        return new Act".$_SESSION['comportamento']."(m_reg->inversion(params,players));}

    inline virtual void substituteNamedRegions(const Context& world){
        m_reg->substituteNamedRegions(world);};


private:
    const Region* const m_reg;
};


// _________Fim Act".$_SESSION['comportamento'];





$template_actions="class Act".$_SESSION['comportamento']."; // '".$_SESSION['actionType']."'";

$template_executor="\t\tvirtual void execute( const Act".$_SESSION['comportamento']."& a )=0;";

$template_log="
## The log file stores the location of the lines of code generated to create the new behavior.
## The log records the tags that were modified to create the new behavior. The tags are used to locate the codes inserted in each of the modified files in SPlanner and FSF.
## Each registered tag can be searched in the file (cntrl + f), to find the places where parts of the code of the new behavior were inserted.

    > Changes made to create the behavior ".$_SESSION['comportamento'].":


File name:        ClangAction.h".PHP_EOL."Located in:             splanner\libs\libsetplay\setplay".PHP_EOL;


//echo $_SESSION['comportamento'];
//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.h','r+');
if ($arquivo) {

    $string="";
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/@@_newAction_class/", $linha)) {



            if (isset($_SESSION['destpoint'])) {
                
                if (strcmp($_SESSION['posse'],      "comBola")          ==0) {
                    if (isset($_SESSION['passe']) ) {
                        if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                            $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passReg, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                        else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                            $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_passPlayer, $linha);
                            $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                        }
                    }
                    if (!isset($_SESSION['passe']) ) {
                        $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_move, $linha);
                        $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                    }
                }
                    

                else if (strcmp($_SESSION['posse'],      "semBola")          ==0) {
                    if (strcmp($_SESSION['destpointType'],  "region")        ==0) {
                        $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_move, $linha);
                        $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                    }
                    else if (strcmp($_SESSION['destpointType'],  "player")        ==0) {
                        $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_mark, $linha);
                        $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
                    }
                }
            }
            
            else if (!isset($_SESSION['destpoint'])) {
                $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_local, $linha);
                $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
            }
            else {
                $string .= str_replace("@@_newAction_class", "@@_newAction_class".PHP_EOL.$template_h, $linha);
                $template_log .="\t- tag: @@_newAction_class".PHP_EOL;
            }
        }


        else if(preg_match("/@@_newAction_gerador/", $linha)) {
            $string .= str_replace("@@_newAction_gerador", "@@_newAction_gerador".PHP_EOL.$template_actions, $linha);
            $template_log .="\t- tag: @@_newAction_gerador".PHP_EOL;
        } 
        else if(preg_match("/@@_newAction_executor/", $linha)) {
            $string .= str_replace("@@_newAction_executor", "@@_newAction_executor".PHP_EOL.$template_executor, $linha);
            $template_log .="\t- tag: @@_newAction_executor".PHP_EOL;
        } 


        //checkbox Generate Clang
        //}
        else {
            // vai colocando tudo numa nova string
            $string.= $linha;
        }
    }


   

    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/libs/libsetplay/setplay/clangaction.h','r');
$linhas_final=0;
while(true) {
    $linha = fgets($arquivo);
    if ($linha==null) break;
    $linhas_final++;
}

$totalInserido=0;
$totalInserido+=($linhas_final-$linhas);

//Escrita do log
$arquivo = fopen('../log/LOG'.$_SESSION["comportamento"].'.txt','a+');

if ($arquivo) {
    rewind($arquivo);
    ftruncate($arquivo, 0);
    fwrite ($arquivo,$template_log);
    fwrite ($arquivo,"Total lines inserted in this file:".($linhas_final-$linhas).PHP_EOL.PHP_EOL);
}
fclose($arquivo);


//chama gerador 2 com o segundo template
header("Location: http://localhost/Gerador/templates/geradorClangaction.php?totalInserido=".$totalInserido);
