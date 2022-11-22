<?php
//#include "Analex.h"
include_once 'Analex.php';
include_once 'Sintatico.php';

 // extrai os dados do post
 //extract($_POST);
 // imprime os dados do post
 //echo "Nome: $nome, Mail: $mail";

$codigo = $_POST['code'];

    $sintatico = new Sintatico();
    $sintatico->inicio($codigo."#");
    while ($sintatico->posicao < strlen($codigo)) {
      $sintatico->prog($codigo."#");
    }
 
  $convert = $sintatico->convertedCode;
  $msgm  = $sintatico->token->msgm;
  $valor = $sintatico->token->codErro;

  echo json_encode(['msgm'=>$msgm, 'erro'=>$valor, 'converted'=>$convert]);

?>
