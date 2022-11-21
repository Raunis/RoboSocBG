<?php
//### ANALISADOR SINTÁTICO ###

#include "Analex.h"
#include<stdio.h>
include_once 'Analex.php';


class Sintatico {

public $token;
public $posicao;
public $analex;
public $convertedCode;

public function erro () {
	printf("erro");
}

public function inicio($codigo) {
	 
	$this->analex = new Lexico();
	$this->token = new Token();

	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	
}


//	 ############################# TIPO ######################################

public	 function tipo($codigo){
	 			 
	 	  		if(( ($this->token->codPR=="PR_CARACTER")||($this->token->codPR=="PR_INTEIRO")||($this->token->codPR=="PR_REAL")||($this->token->codPR=="PR_BOOLEANO") )&& ($this->token->tipo=="PR"))
				     {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
				    				
				else {
		   			 printf("ERRO, Tipo Esperado! %d",$this->analex->contLinha);
                     erro ();
					 }
		  }

// ################################## TIPOS_P_OPC ###############################


public function tipos_p_opc($codigo){
	 
	if(($this->token->tipo=="PR")&&($this->token->codPR=="PR_SEMPARAM"))
	 	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	 		
    else{
		tipo($codigo);
	 	if($this->token->tipo=="ID") {
	 		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	 	}
		while(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")){
	            {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				tipo($codigo);
				if($this->token->tipo=="ID") {{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
					}
		}
	}
}


// ################################## TIPOS_PARAM ###############################


public function tipos_Param($codigo){
	 
	if(($this->token->tipo=="PR")&&($this->token->codPR=="PR_SEMPARAM")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
		
    else{
	 	tipo($codigo);
 		if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
 			
 		else{
		 	printf("ERRO, ID Esperado! na linha %d",$this->analex->contLinha);
			erro();
		}
	    while(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")){
            {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			tipo($codigo);
			if($this->token->tipo=="ID")
			      {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
			      	
			else{
				 printf("ERRO, ID Esperado! na linha %d",$this->analex->contLinha);
	  			 erro();
			}
		}
	}
}

// ###############################	PROG ###################################

public function prog($codigo){
	$this->token->codErro = 1;	

	//PROTOTIPO
	 if(($this->token->tipo=="PR")&&($this->token->codPR=="PR_PROTOTIPO")) {
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	

    	if(($this->token->tipo=="PR")&&($this->token->codPR=="PR_SEMRETORNO")) {
		 	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	

		 	if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
		 		
		 	else  {
		 		printf ("ERRO, ID Esperado! na linha %d",$this->analex->contLinha);
		 		erro();
		 	}

	 		if(($this->token->tipo=="SN")&&($this->token->codSN=="SN_ABRI_PARENTESE")) 
	 			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	 			
	 		else {
				printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
		   	    erro();
			}
			tipos_p_opc($codigo);

			 if(($this->token->tipo=="SN")&&($this->token->codSN=="SN_FECHA_PARENTESE")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
		 			
			 else {
			 	printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
			 }

			 while($this->token->tipo!="SN" || $this->token->codSN!="SN_PONTO_VIRGULA") {

		 		if(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
		 			
		 		else
		        {printf("ERRO, , Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
				}

				if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
					
				else
		        {printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
				}

				if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else
				{ printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
				}

				tipos_p_opc($codigo);

				if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
            			erro();
	  			}
			}

			if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
				
			else {
				printf("ERRO, ; Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}

		}

		else {
			tipo($codigo);
			if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
				
		 	else  {
		 		printf ("ERRO, ID Esperado! na linha %d",$this->analex->contLinha);
		 		erro();
		 	}

	 		if(($this->token->tipo=="SN")&&($this->token->codSN=="SN_ABRI_PARENTESE")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	 			
			else {
				printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
			}

			tipos_p_opc($codigo);

	        if(($this->token->tipo=="SN")&&($this->token->codSN=="SN_FECHA_PARENTESE")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
			 	printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
			}
		 	while($this->token->tipo!="SN" || $this->token->codSN!="SN_PONTO_VIRGULA") {
		 		if(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		 		else
		        {printf("ERRO, , Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
				}

				if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else
		        {printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
		   	         erro();
				}
				if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					tipos_p_opc($codigo);
				}
				else {
				 	printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
					erro();
				}
				if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else
				{ 	printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
					erro();
	  			}
			}
			if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
				printf("ERRO, ; Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}
		}
	}

	//SEM RETORNO
	else if(($this->token->codPR=="PR_SEMRETORNO")&&($this->token->tipo=="PR")) {
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
   	        erro();
		}
		if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
   	        erro();
		}
		tipos_Param($codigo);
		if($this->token->codSN=="SN_FECHA_PARENTESE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
   	        erro();
		}
		if($this->token->codSN=="SN_ABRI_CHAVE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, { Esperado!na linha %d",$this->analex->contLinha);
   	        erro();
		}
		while ($this->token->tipo=="PR" && ($this->token->codPR=="PR_CARACTER"||$this->token->codPR=="PR_INTEIRO"||$this->token->codPR=="PR_REAL"||$this->token->codPR=="PR_BOOLEANO")) {
				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
				}
				while ($this->token->tipo == "SN" && $this->token->codSN=="SN_VIRGULA") {
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					else {
						printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
 		   	         	erro();
					}
				}
				if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ; Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
				}
		}

		//while ($this->token->tipo!="SN" || token.valor.codSN != SN_FECHA_CHAVE) {
		while (($this->token->tipo=="PR" && ($this->token->codPR=="PR_SE" ||$this->token->codPR=="PR_ENQUANTO"||$this->token->codPR=="PR_PARA"||$this->token->codPR=="PR_RETORNE"))||$this->token->tipo=="ID"||($this->token->tipo=="SN" && ($this->token->codSN=="SN_ABRI_CHAVE"||$this->token->codSN=="SN_PONTO_VIRGULA"))) {
			cmd($codigo);
		}

		if($this->token->codSN=="SN_FECHA_CHAVE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, } Esperado!na linha %d",$this->analex->contLinha);
   	        erro();
		}
	}

	//TIPO
	else if ($this->token->tipo == "PR" && ($this->token->codPR=="PR_CARACTER"||$this->token->codPR=="PR_INTEIRO"||$this->token->codPR=="PR_REAL"||$this->token->codPR=="PR_BOOLEANO")) {

		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else {
			printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
   	         	erro();
		}
		if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")) {
			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			tipos_Param($codigo);
			if($this->token->codSN=="SN_FECHA_PARENTESE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
				printf("ERRO, ) Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}
			if($this->token->codSN=="SN_ABRI_CHAVE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
				printf("ERRO, { Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}

			while ($this->token->tipo=="PR" && ($this->token->codPR=="PR_CARACTER"||$this->token->codPR=="PR_INTEIRO"||$this->token->codPR=="PR_REAL"||$this->token->codPR=="PR_BOOLEANO")) {
				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
				}
				while ($this->token->tipo=="SN" && $this->token->codSN=="SN_VIRGULA") {
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					else {
						printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
 		   	         	erro();
					}
				}
				if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ; Esperado!na linha %d",$this->analex->contLinha);
		   	        erro();
				}
			}

			while (($this->token->tipo=="PR" && ($this->token->codPR=="PR_SE" ||$this->token->codPR=="PR_ENQUANTO"||$this->token->codPR=="PR_PARA"||$this->token->codPR=="PR_RETORNE"))||$this->token->tipo=="ID"||($this->token->tipo=="SN" && ($this->token->codSN=="SN_ABRI_CHAVE"||$this->token->codSN=="SN_PONTO_VIRGULA"))) {
				cmd($codigo);
			}

			/*while (token.valor.codSN!=SN_FECHA_CHAVE) {
				cmd($codigo);
			}*/

			if($this->token->codSN=="SN_FECHA_CHAVE" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
				printf("ERRO, } Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}
		}

		else if ($this->token->tipo=="SN" && ($this->token->codSN=="SN_PONTO_VIRGULA" || $this->token->codSN=="SN_VIRGULA")) {
			while ($this->token->tipo!="SN" || $this->token->codSN!="SN_PONTO_VIRGULA") {
				if($this->token->codSN=="SN_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else{
				 printf("ERRO, , Esperado!na linha %d",$this->analex->contLinha);
				 erro();
				}
				if($this->token->tipo=="ID") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				else {
					printf("ERRO, ID Esperado!na linha %d",$this->analex->contLinha);
	   	         	erro();
				}
			}
			if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else {
				printf("ERRO, ; Esperado!na linha %d",$this->analex->contLinha);
	   	        erro();
			}
		}

		else {
			printf("ERRO, tipo errado linha %d",$this->analex->contLinha);
			erro();
		}


	}


	///////COMANDO (CMD)

	else if (($this->token->codPR=="PR_INICIO")&&($this->token->tipo=="PR")) {
		//printf("ERRO, inicio Esperado! na linha %d",$this->analex->contLinha);
		//FILE * convert;
		//convert = fopen ("convert.c", "w+");
		//fputs("parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,nothing_p);\nif(result.hit){", convert);
		//fclose(convert);
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}
	
	else if (($this->token->codPR=="PR_BALLMOVETYPE")&&($this->token->tipo=="PR")) {
						//FILE * convert;
						//convert = fopen ("convert.c", "a");
						//fputs("string type_;\n\nresult = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>\":type\">>*space_p>>identifier_p[assign_a(type_)],nothing_p);\n\nBallMoveType typeAttrib=undefinedBallMove;\n\nif(result.hit){\n\tif(type_==\"normal\") typeAttrib=normalBallMove;\n\telse if(type_==\"fast\") typeAttrib=fastBallMove;\n\telse if(type_==\"slow\") typeAttrib=slowBallMove;\n\telse{\n\t\treturn NULL;\n\t}\n\trest=rest.substr(
						//	result.length);\n}", convert);
						//fclose(convert);
						{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}

	//SE
	else if(($this->token->codPR=="PR_SE")&&($this->token->tipo=="PR")){
				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					if (($this->token->codPR=="PR_ACTIONS")&&($this->token->tipo=="PR")) {
						
						//convert = fopen ("convert.c", "a");
						$this->convertedCode = $this->convertedCode."Action* act=Action::parse(in.substr(result.length), rest,parameters,players);\nif(act){";
						//echo"Action* act=Action::parse(in.substr(result.length), rest,parameters,players);\nif(act){";

						//expr($codigo);
						{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
					}
					if (($this->token->codPR=="PR_REGION")&&($this->token->tipo=="PR")) {
						//FILE * convert;
						//convert = fopen ("convert.c", "a");
						//fputs("\n\tstring rest;\n\tRegion* reg= Region::parse(in.substr(result.length),rest,parameters,players);\n\tif(reg){", convert);
						//fclose(convert);

						{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
					}
					if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")){
			 				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			 				if(($this->token->codPR=="PR_THEN")&&($this->token->tipo=="PR")){
								{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	

								if(($this->token->codSN=="SN_ABRI_CHAVE")&&($this->token->tipo=="SN")){
									{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
									//while(!(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN")))
										if (($this->token->codPR=="PR_FINAL")&&($this->token->tipo=="PR")) {
                                            //FILE * convert;
											//convert = fopen ("convert.c", "a");

											//fputs("\n\tresult = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>')', nothing_p);\n\tif(result.hit){\n\t\tout=rest.substr(result.length);\n\t\treturn new ActSeq(actions);\n\t}\n}", convert);
											//fclose(convert);
											{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
										}
										
									if(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
									else{
										$this->token->msgm = ("ERRO, } Esperado! na linha ".$this->analex->contLinha);
										$this->token->codErro = -1;
										$this->posicao = strlen($codigo);
										//printf("ERRO, } Esperado! na linha %d",$this->analex->contLinha);
							            //$this->erro();
							        }
								}
								else{
										$this->token->msgm = ("ERRO, { Esperado! na linha ".$this->analex->contLinha);
							            $this->token->codErro = -1;
							            $this->posicao = strlen($codigo);
							        }

								//cmd($codigo);

		   						if(($this->token->codPR=="PR_SENAO")&&($this->token->tipo=="PR")){
									{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
									cmd($codigo);
								}
							}
						 	else{
							    $this->token->msgm = ("ERRO, then Esperado! na linha ".$this->analex->contLinha);
		   				        $this->token->codErro = -1;
		   				        $this->posicao = strlen($codigo);
				        	}
					}
				 	else{
					    $this->token->msgm = ("ERRO, ) Esperado! na linha ".$this->analex->contLinha);
   				        $this->token->codErro = -1;
   				        $this->posicao = strlen($codigo);
		        	}
                }
				else{
					 $this->token->msgm = ("ERRO, (  Esperado! na linha ".$this->analex->contLinha);
	   				 $this->token->codErro = -1;
	   				 $this->posicao = strlen($codigo);
			  	}
  	}

  	//ENQUANTO
  	else if(($this->token->codPR=="PR_ENQUANTO")&&($this->token->tipo=="PR")){

       {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
       if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
     		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
 	 		expr($codigo);

 			if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")){
 				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				cmd($codigo);
         	}
        	else{
         	     printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
                 erro();
            }
     	}
 		else{
	     	printf("ERRO, (  Esperado! na linha %d",$this->analex->contLinha);
		    erro();
    	}
  	}

	//PARA
	else if(($this->token->codPR=="PR_PARA")&&($this->token->tipo=="PR")){
           {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			   if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
		   				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						if($this->token->tipo!="SN" || $this->token->codSN!="SN_PONTO_VIRGULA") atrib($codigo);
						if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
         	                printf("ERRO, ; Esperado! na linha %d",$this->analex->contLinha);
                            erro();
	                    }


						if(!(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN"))) expr($codigo);

						if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
							 printf("ERRO, ; Esperado! na linha %d ",$this->analex->contLinha);
                             erro();
	                    }
						if(!(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN"))) atrib($codigo);
						if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
							printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
                            erro();
                        }
						cmd($codigo);
						}
			else{
		 	  printf("ERRO, ( Esperado! na linha %d",$this->analex->contLinha);
              erro();
            }
	}


	//RETORNE
	else if(($this->token->codPR=="PR_RETORNE")&&($this->token->tipo=="PR"))  {

	   	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if(!(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN"))) expr($codigo);
		if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else{
	 	printf("ERRO, ; Esperado! linha %d",$this->analex->contLinha);
            erro();
        }
	}

	//ID
	else if($this->token->tipo=="ID"){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
		  	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			if(!(($this->token->tipo=="SN")&&($this->token->codSN=="SN_FECHA_PARENTESE"))){
  				$this::expr($codigo);
				while(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					expr($codigo);
				}
	  		}
	  		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){ {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	 }
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",$this->analex->contLinha);
           		$this::erro();
     		}
		}
		else if ($this->token->codSN=="SN_ATRIBUICAO" && $this->token->tipo=="SN") {
			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			expr($codigo);
			if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",$this->analex->contLinha);
           		erro();
     		}
		}
	 	else{
	 	  printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
          erro();
      	}
 	}

	// {CMD}
	else if(($this->token->codSN=="SN_ABRI_CHAVE")&&($this->token->tipo=="SN")){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		while(!(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN"))) cmd($codigo);
		if(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else{
			printf("ERRO, } Esperado! na linha %d",$this->analex->contLinha);
            erro();
        }
	}

    else if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	




	//////////////

	else if ($this->token->tipo=="CMT") {
		 {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}

	else if ($this->token->tipo=="FA") {
		 {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}

	//PRECISA? CASO NAO SEJA NENHUM DOS 3
	else {
		printf("ERRO, prog invalido linha %d",$this->analex->contLinha);
		$this::erro();
		}

}

	// ############################ CMD ############################3

public function cmd($codigo){
	 

	//SE
	if(($this->token->codPR=="PR_SE")&&($this->token->tipo=="PR")){
				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					expr($codigo);
		 		 	if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")){
			 				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			 				if(($this->token->codPR=="PR_THEN")&&($this->token->tipo=="PR")){
								{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
								cmd($codigo);

		   						if(($this->token->codPR=="PR_SENAO")&&($this->token->tipo=="PR")){
									{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
									cmd($codigo);
								}
							}
						 	else{
							    printf("ERRO, then Esperado! na linha %d",$this->analex->contLinha);
		   				        erro();
				        	}
					}
				 	else{
					    printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
   				        erro();
		        	}
                }
				else{
					 printf("ERRO, (  Esperado! na linha %d",$this->analex->contLinha);
	   				 erro();
			  	}
  	}

  	//ENQUANTO
  	else if(($this->token->codPR=="PR_ENQUANTO")&&($this->token->tipo=="PR")){

       {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
       if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
     		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
 	 		expr($codigo);

 			if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")){
 				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				cmd($codigo);
         	}
        	else{
         	     printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
                 erro();
            }
     	}
 		else{
	     	printf("ERRO, (  Esperado! na linha %d",$this->analex->contLinha);
		    erro();
    	}
  	}

	//PARA
	else if(($this->token->codPR=="PR_PARA")&&($this->token->tipo=="PR")){
           {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			   if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
		   				{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						if($this->token->tipo!="SN" || $this->token->codSN!="SN_PONTO_VIRGULA") atrib($codigo);
						if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
         	                printf("ERRO, ; Esperado! na linha %d",$this->analex->contLinha);
                            erro();
	                    }


						if(!(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN"))) expr($codigo);

						if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
							 printf("ERRO, ; Esperado! na linha %d ",$this->analex->contLinha);
                             erro();
	                    }
						if(!(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN"))) atrib($codigo);
						if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
						else{
							printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
                            erro();
                        }
						cmd($codigo);
						}
			else{
		 	  printf("ERRO, ( Esperado! na linha %d",$this->analex->contLinha);
              erro();
            }
	}


	//RETORNE
	else if(($this->token->codPR=="PR_RETORNE")&&($this->token->tipo=="PR"))  {

	   	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if(!(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN"))) expr($codigo);
		if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else{
	 	printf("ERRO, ; Esperado! linha %d",$this->analex->contLinha);
            erro();
        }
	}

	//ID
	else if($this->token->tipo=="ID"){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
		  	{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			if(!(($this->token->tipo=="SN")&&($this->token->codSN=="SN_FECHA_PARENTESE"))){
  				expr($codigo);
				while(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					expr($codigo);
				}
	  		}
	  		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")){ {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	 }
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",$this->analex->contLinha);
           		erro();
     		}
		}
		else if ($this->token->codSN=="SN_ATRIBUICAO" && $this->token->tipo=="SN") {
			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			expr($codigo);
			if($this->token->codSN=="SN_PONTO_VIRGULA" && $this->token->tipo=="SN") {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",$this->analex->contLinha);
           		erro();
     		}
		}
	 	else{
	 	  printf("ERRO, ( Esperado!na linha %d",$this->analex->contLinha);
          erro();
      	}
 	}

	// {CMD}
	else if(($this->token->codSN=="SN_ABRI_CHAVE")&&($this->token->tipo=="SN")){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		while(!(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN"))) cmd($codigo);
		if(($this->token->codSN=="SN_FECHA_CHAVE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		else{
			printf("ERRO, } Esperado! na linha %d",$this->analex->contLinha);
            erro();
        }
	}

    else if(($this->token->codSN=="SN_PONTO_VIRGULA")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	

  	else {
  		printf("ERRO, Comando Esperado!na linha %d",$this->analex->contLinha);
    	erro();
    }

}

//######################################### ATRIB ######################################



public function atrib($codigo){
	 
	 if($this->token->tipo=="ID"){
	 			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
				if(($this->token->codSN=="SN_ATRIBUICAO")&&($this->token->tipo=="SN")){
							{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
							expr($codigo);
				 }
				else
				{
				  printf("ERRO, = Esperado! na linha %d",$this->analex->contLinha);
	 		   	  erro();
			 	 }
				 }
				 else
				 {
				  printf("ERRO, ID Esperado! na linha %d",$this->analex->contLinha);
	 		   	  erro();
			 	 }
}

// ################################### EXPR ###############################3

public function expr($codigo){
           $this::expr_Simp($codigo);
           if($this::op_Rel($codigo)) $this::expr_Simp($codigo);

		   }

// ############################ EXPR_SIMP ################################

public function expr_Simp($codigo){
	 

	 if(($this->token->codSN=="SN_MAIS"||$this->token->codSN=="SN_MENOS")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	 $this::termo($codigo);

	 while((($this->token->codSN=="SN_MAIS")||($this->token->codSN=="SN_MENOS")||($this->token->codSN=="SN_OR"))&&($this->token->tipo=="SN")){
	 							{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
								$this::termo($codigo);
								}
}


// ############################# TERMO ####################################


public function termo($codigo){
	 
	   $this::fator($codigo);
	   while((($this->token->codSN=="SN_VEZES")||($this->token->codSN=="SN_DIVISAO")||($this->token->codSN=="SN_AND"))&&($this->token->tipo=="SN")){

	   										{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
											$this::fator($codigo);
											}
}

// ############################ FATOR ############################

public function fator($codigo){
	 

	 if(($this->token->tipo=="CTI")|| ($this->token->tipo=="CTR")|| ($this->token->tipo=="CTC")|| ($this->token->tipo=="CTL")) {
	    {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}
	else if(($this->token->codSN=="SN_NEGACAO")&&($this->token->tipo=="SN")){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		$this::fator($codigo);
	}

	else if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		$this::expr($codigo);
		if(!(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN"))){
			printf("ERRO, )  Esperado! na linha %d",$this->analex->contLinha);
	 		erro();
		}
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
	}

	else if($this->token->tipo=="ID"){
		{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
		if(($this->token->codSN=="SN_ABRI_PARENTESE")&&($this->token->tipo=="SN")){
			{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			if( $this->token->codSN!="SN_FECHA_PARENTESE"){
		 	   	$this::expr($codigo);
				while(($this->token->codSN=="SN_VIRGULA")&&($this->token->tipo=="SN")){
					{$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
					$this::expr($codigo);
				}
			}
			if(($this->token->codSN=="SN_FECHA_PARENTESE")&&($this->token->tipo=="SN")) {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
			else{
				printf("ERRO, ) Esperado! na linha %d",$this->analex->contLinha);
	            erro();
	        }
		}
	}

	else{
   		printf("ERRO, fator Esperado! na linha %d",$this->analex->contLinha);
   		printf("token erro: %d",$this->token->lexema);
        $this::erro();
	}

 }

 //################################## OP_ REL ###################################


 public function op_Rel($codigo){
 	 

	  if($this->token->tipo=="SN"){
		 if( $this->token->codSN=="SN_IGUALDADE" || $this->token->codSN=="SN_DIFERENTE" || $this->token->codSN=="SN_MENOR" || $this->token->codSN=="SN_MENOR_IGUAL" || $this->token->codSN=="SN_MAIOR" || $this->token->codSN=="SN_MAIOR_IGUAL" ){
           {$this->token = $this->analex->analex($codigo);	$this->posicao = $this->analex->posicao;}
	
           return 1;
		   }
		   }
		   else
		   return 0;
		   return 0;
}

}
?>