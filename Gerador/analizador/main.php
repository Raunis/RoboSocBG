<?php
//#include "Analex.h"
include_once 'analex.php';
include_once 'sintatico.php';

//$codigo = $_POST['code'];
$codigo="if ( actions ) then {";
  function lexico ($codigo) { 
    //$codigo="if ( actions )";
    $token = new Token();
    $lexico = new Lexico();
    while ($lexico->posicao < strlen($codigo)) {
      $token = $lexico->analex($codigo."#");
      $lexico->imprimir($token);
    }
  }

  function sintatico ($codigo) {
    
    $sintatico = new Sintatico();
    $sintatico->inicio($codigo."#");
    while ($sintatico->posicao < strlen($codigo)) {
      $sintatico->prog($codigo."#");
    }
    return $sintatico->convertedCode;
  }
 
//lexico($codigo);
$convertedCode = sintatico($codigo);



//printf ("\nAnalise simtatica concluida.\n \nPressione Enter para sair.");

?>


