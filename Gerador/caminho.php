<?php

//Primeira Página do gerador, além de iniciar a SESSION, garante que qualquer outra SESSION
//residual seja destruída.

function caminho () {
	session_start();        // Start Session / iniciamos a SESSION
	$_SESSION = $_POST;     // armazena o POST na SESSIION


	//EN
	//HERE IS THE PLACE WHERE THE GENERATOR KEEPS THE TEAM AND SPLANNER PATH:

	//PT-BR
	//AQUI É O LOCAL ONDE O GERADOR GUARDA O TEAM AND SPLANNER PATH:

	//EN
	//caminho_SPlanner (SPlanner path)
	//Replace "caminho_SPlanner" with the address that is between the Home folder and the setPlayGUI folder:
	//Home/caminho_SPlanner/setPlayGUI

	//PT-BR
	//Substitua "caminho_SPlanner" pelo treicho do endereço que fica entre a Pasta pessoal e o setPlayGUI:
	//Pasta pessoal/caminho_SPlanner/setPlayGUI

	$caminho_SPlanner=  'splanner';


	//EN
	//caminho_time (team path)
	//Replace "caminho_time" with the address that is between the Home folder and the strategy folder:
	//Home/caminho_Time/strategy

	//PT-BR
	//Substitua "caminho_Time" pelo treicho do endereço que fica entre a Pasta pessoal e a pasta strategy:
	//Pasta pessoal/caminho_Time/strategy

	$caminho_Time=      'bahiart/bahia';


	$_SESSION['splanner']=  $caminho_SPlanner;
	$_SESSION['time']=      $caminho_Time;
	return ($_SESSION);

}


echo '<script language="javascript">';
echo '</script>';

//header("Location: http://localhost/Gerador/templates/geradorClangactionH.php");
?>