<?php

//Cada página do gerador reabre a SESSION para poder acessar os parâmetros coletados no formulário
//de interface com o desenvolvedor
session_start(); 

//Cada template corresponde a um treixo ou um modelo extraido do código 
//fonte do SPlanner ou do Framework. Os locais de concatenação substituem
//parte do modelo original do código fonte por parâmetros coletados no
//formulario de interface com o desenvolvedor.
$template_spaction="\t\t\"".$_SESSION['comportamento']."\",";

$template_case="\t\tcase ".$_SESSION['comportamento'].":
        {
            draw".$_SESSION['comportamento']."(painter, line);
            break;
        }";

$template_caseLocal="    else if (type == ".$_SESSION['comportamento'].") 
        {
            draw".$_SESSION['comportamento']."(painter);
        }";

$template_drawGeneric= 
"void SpAction::draw".$_SESSION['comportamento']."(QPainter *painter, QLineF &line)
{
    QPointF sourcePoint = sourceSpPoint->getScreenPoint();
    QPointF destPoint = destSpPoint->getScreenPoint();
    QFont font;
    font.setBold(true);
    painter->setFont(font);
    painter->setPen(QPen(Qt::darkBlue));
    line = QLineF(sourcePoint, destPoint);
    QPointF p = line.pointAt(0.5) + QPointF( -paintSize, paintSize);
    painter->drawLine(line);
    painter->drawText(p, QString(\"".$_SESSION['comportamento']."\"));
}";

$template_drawGenericLocal=
"void SpAction::draw".$_SESSION['comportamento']."(QPainter *painter)
{
    QPointF sourcePoint = sourceSpPoint->getScreenPoint();
    painter->setBrush(Qt::red);
    painter->setPen(QPen(Qt::red, paintSize*7/5, Qt::SolidLine, Qt::RoundCap, Qt::RoundJoin));
    painter->drawText(QRectF(sourcePoint, sourcePoint + QPointF(paintSize*3,paintSize*3)), Qt::AlignCenter, \"".$_SESSION['comportamento']."\");
}";

$template_goalCenter="\telse if(type == ".$_SESSION['comportamento'].")
        destSpPoint = new SpPoint(f, true, field->getLeftGoalCenter());";

//$template_passeAtualize="\t\telse if (actor->getAction() && actor->getAction()->getType() == ".$_SESSION['comportamento'].")
//            type = ".$_SESSION['comportamento'].";";


$template_passeAtualize="else if (type == ".$_SESSION['comportamento'].")
            type = ".$_SESSION['comportamento'].";";

$template_log="File name:     spaction.cpp".PHP_EOL."Located in:         splanner\setPlayGUI".PHP_EOL;

//ROTINAS DE MANIPULAÇÃO DE ARQUIVO - AQUI O GERADOR ATUALIZA AUTOMATICAMENTE OS CÓDIGOS FONTE.
$linhas=0;
$arquivo = fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spaction.cpp','r+');
if ($arquivo) {
    while(true) {
        $linha = fgets($arquivo);
        if ($linha==null) break;
        
        $linhas++;
        // busca na linha atual o conteudo que vai ser alterado
        if (preg_match("/@@_newAction_goalCenter/", $linha)) {
            if (isset($_SESSION['gol']) ) {

                $string3 .= str_replace("@@_newAction_goalCenter", "@@_newAction_goalCenter".PHP_EOL.$template_goalCenter, $linha);
                $template_log .="\t- tag: @@_newAction_goalCenter".PHP_EOL; 
            }
            else
                $string3.= $linha;
        } 
        else if(preg_match("/@@_newAction_print/", $linha)) {
            $string3.= str_replace("@@_newAction_print", "@@_newAction_print".PHP_EOL.$template_spaction, $linha);
            $template_log .="\t- tag: @@_newAction_print".PHP_EOL;
        }
        else if(preg_match("/@@_newAction_getName/", $linha)) {
            $string3.= str_replace("@@_newAction_getName", "@@_newAction_getName".PHP_EOL.$template_spaction, $linha);
            $template_log .="\t- tag: @@_newAction_getName".PHP_EOL;
        }
        else if (preg_match("/@@_newAction_Local/", $linha)) {
            if ( !isset($_SESSION['destpoint']) 
             &&  !isset($_SESSION['gol']) ){   //caso o usuário não precise definir destpoint
                                                       //da ação no campo
                $string3 .= str_replace("@@_newAction_Local", "@@_newAction_Local".PHP_EOL.$template_caseLocal, $linha);
                $template_log .="\t- tag: @@_newAction_Local".PHP_EOL;
            }
            else
                $string3.= $linha;
        } 
        else if (preg_match("/@@_newAction_case/", $linha)) {
            if ( isset($_SESSION['destpoint'])
             ||  isset($_SESSION['gol']) ){

                $string3 .= str_replace("@@_newAction_case", "@@_newAction_case".PHP_EOL.$template_case, $linha);
                $template_log .="\t- tag: @@_newAction_case".PHP_EOL;
            }
            else
                $string3.= $linha;
        } 
        else if (preg_match("/@@_newAction_genericDraw/", $linha)) {
            if ( isset($_SESSION['destpoint'])
             ||  isset($_SESSION['gol']) ){

                $string3 .= str_replace("@@_newAction_genericDraw", "@@_newAction_genericDraw".PHP_EOL.$template_drawGeneric, $linha);
                $template_log .="\t- tag: @@_newAction_genericDraw".PHP_EOL;
            }
            else if ( !isset($_SESSION['destpoint']) 
                  &&  !isset($_SESSION['gol']) ){

                $string3 .= str_replace("@@_newAction_genericDraw", "@@_newAction_genericDraw".PHP_EOL.$template_drawGenericLocal, $linha);
                $template_log .="\t- tag: @@_newAction_genericDraw".PHP_EOL;
            }
        }
        else if (preg_match("/@@_newAction_Passe/", $linha)) {
            if ( isset($_SESSION['destpoint'])
              && isset($_SESSION['passe']) ){     
                
                $string3 .= str_replace("@@_newAction_Passe", "@@_newAction_Passe".PHP_EOL.$template_passeAtualize, $linha);
                $template_log .="\t- tag: @@_newAction_Passe".PHP_EOL;
            }
            else
                $string3.= $linha;
        }
        else {
            // vai colocando tudo numa nova string
            $string3.= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string3)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
//AQUI TERMINA A ATUALIZAÇÃO DO CÓDIGO FONTE


//AQUI É REALIZADA A CONTAGEM DO TOTAL DE LINHAS INSERIDAS
$arquivo=fopen('../../../'.$_SESSION['splanner'].'/setPlayGUI/spaction.cpp','r');
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
header("Location: http://localhost/Gerador/templates/geradorSpactionH.php?totalInserido=".$_GET["totalInserido"]);
