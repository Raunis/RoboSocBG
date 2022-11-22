<?php
 // extrai os dados do post
 extract($_POST);
 // imprime os dados do post
 //echo "Nome: $nome, Mail: $mail";
 echo json_encode(['name'=>$nome, 'email'=>$mail]);
?>