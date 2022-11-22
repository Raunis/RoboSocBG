//### ANALISADOR SINTÁTICO ###

#include "Analex.h"
#include<stdio.h>

void erro () {
	system("PAUSE");
 	exit(1);
}

void inicio (FILE* fp) {
	token=analex(fp);
}


//	 ############################# TIPO ######################################

	 void tipo(FILE* fp){

	 	  		if(( (token.valor.codPR==PR_CARACTER)||(token.valor.codPR==PR_INTEIRO)||(token.valor.codPR==PR_REAL)||(token.valor.codPR==PR_BOOLEANO) )&& (token.tipo==PR))
				     token=analex(fp);
				else {

		   			 printf("ERRO, Tipo Esperado! %d",contLinha);
                     erro ();
					 }
		  }

// ################################## TIPOS_P_OPC ###############################


void tipos_p_opc(FILE* fp){
	if((token.tipo==PR)&&(token.valor.codPR==PR_SEMPARAM))
	 	token=analex(fp);
    else{
		tipo(fp);
	 	if(token.tipo==ID) {
	 		token=analex(fp);
	 	}
		while((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)){
	            token=analex(fp);
				tipo(fp);
				if(token.tipo==ID) token=analex(fp);
		}
	}
}


// ################################## TIPOS_PARAM ###############################


void tipos_Param(FILE* fp){
	if((token.tipo==PR)&&(token.valor.codPR==PR_SEMPARAM)) token=analex(fp);
    else{
	 	tipo(fp);
 		if(token.tipo==ID) token=analex(fp);
 		else{
		 	printf("ERRO, ID Esperado! na linha %d",contLinha);
			erro();
		}
	    while((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)){
            token=analex(fp);
			tipo(fp);
			if(token.tipo==ID)
			      token=analex(fp);
			else{
				 printf("ERRO, ID Esperado! na linha %d",contLinha);
	  			 erro();
			}
		}
	}
}

// ###############################	PROG ###################################

void prog(FILE* fp){

	//PROTOTIPO
	 if((token.tipo==PR)&&(token.valor.codPR==PR_PROTOTIPO)) {
		token=analex(fp);

    	if((token.tipo==PR)&&(token.valor.codPR==PR_SEMRETORNO)) {
		 	token=analex(fp);

		 	if(token.tipo==ID) token=analex(fp);
		 	else  {
		 		printf ("ERRO, ID Esperado! na linha %d",contLinha);
		 		erro();
		 	}

	 		if((token.tipo==SN)&&(token.valor.codSN==SN_ABRI_PARENTESE)) token=analex(fp);
	 		else {
				printf("ERRO, ( Esperado!na linha %d",contLinha);
		   	    erro();
			}
			tipos_p_opc(fp);

			 if((token.tipo==SN)&&(token.valor.codSN==SN_FECHA_PARENTESE)) token=analex(fp);
			 else {
			 	printf("ERRO, ) Esperado!na linha %d",contLinha);
		   	        erro();
			 }

			 while(token.tipo!= SN || token.valor.codSN!=SN_PONTO_VIRGULA) {

		 		if((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)) token=analex(fp);
		 		else
		        {printf("ERRO, , Esperado!na linha %d",contLinha);
		   	         erro();
				}

				if(token.tipo==ID) token=analex(fp);
				else
		        {printf("ERRO, ID Esperado!na linha %d",contLinha);
		   	         erro();
				}

				if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
				else
				{ printf("ERRO, ( Esperado!na linha %d",contLinha);
		   	         erro();
				}

				tipos_p_opc(fp);

				if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
				else {
					printf("ERRO, ) Esperado!na linha %d",contLinha);
            			erro();
	  			}
			}

			if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, ; Esperado!na linha %d",contLinha);
	   	        erro();
			}

		}

		else {
			tipo(fp);
			if(token.tipo==ID) token=analex(fp);
		 	else  {
		 		printf ("ERRO, ID Esperado! na linha %d",contLinha);
		 		erro();
		 	}

	 		if((token.tipo==SN)&&(token.valor.codSN==SN_ABRI_PARENTESE)) token=analex(fp);
			else {
				printf("ERRO, ( Esperado!na linha %d",contLinha);
		   	         erro();
			}

			tipos_p_opc(fp);

	        if((token.tipo==SN)&&(token.valor.codSN==SN_FECHA_PARENTESE)) token=analex(fp);
			else {
			 	printf("ERRO, ) Esperado!na linha %d",contLinha);
		   	        erro();
			}
		 	while(token.tipo!= SN || token.valor.codSN!=SN_PONTO_VIRGULA) {
		 		if((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)) token=analex(fp);
		 		else
		        {printf("ERRO, , Esperado!na linha %d",contLinha);
		   	         erro();
				}

				if(token.tipo==ID) token=analex(fp);
				else
		        {printf("ERRO, ID Esperado!na linha %d",contLinha);
		   	         erro();
				}
				if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
					token=analex(fp);
					tipos_p_opc(fp);
				}
				else {
				 	printf("ERRO, ( Esperado!na linha %d",contLinha);
					erro();
				}
				if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
				else
				{ 	printf("ERRO, ) Esperado!na linha %d",contLinha);
					erro();
	  			}
			}
			if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, ; Esperado!na linha %d",contLinha);
	   	        erro();
			}
		}
	}

	//SEM RETORNO
	else if((token.valor.codPR==PR_SEMRETORNO)&&(token.tipo==PR)) {
		token=analex(fp);
		if(token.tipo==ID) token=analex(fp);
		else {
			printf("ERRO, ID Esperado!na linha %d",contLinha);
   	        erro();
		}
		if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
		else {
			printf("ERRO, ( Esperado!na linha %d",contLinha);
   	        erro();
		}
		tipos_Param(fp);
		if(token.valor.codSN==SN_FECHA_PARENTESE && token.tipo==SN) token=analex(fp);
		else {
			printf("ERRO, ) Esperado!na linha %d",contLinha);
   	        erro();
		}
		if(token.valor.codSN==SN_ABRI_CHAVE && token.tipo==SN) token=analex(fp);
		else {
			printf("ERRO, { Esperado!na linha %d",contLinha);
   	        erro();
		}
		while (token.tipo==PR && (token.valor.codPR==PR_CARACTER||token.valor.codPR==PR_INTEIRO||token.valor.codPR==PR_REAL||token.valor.codPR==PR_BOOLEANO)) {
				token=analex(fp);
				if(token.tipo==ID) token=analex(fp);
				else {
					printf("ERRO, ID Esperado!na linha %d",contLinha);
		   	        erro();
				}
				while (token.tipo == SN && token.valor.codSN==SN_VIRGULA) {
					token=analex(fp);
					if(token.tipo==ID) token=analex(fp);
					else {
						printf("ERRO, ID Esperado!na linha %d",contLinha);
 		   	         	erro();
					}
				}
				if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
				else {
					printf("ERRO, ; Esperado!na linha %d",contLinha);
		   	        erro();
				}
		}

		//while (token.tipo!= SN || token.valor.codSN != SN_FECHA_CHAVE) {
		while ((token.tipo==PR && (token.valor.codPR==PR_SE ||token.valor.codPR==PR_ENQUANTO||token.valor.codPR==PR_PARA||token.valor.codPR==PR_RETORNE))||token.tipo==ID||(token.tipo==SN && (token.valor.codSN==SN_ABRI_CHAVE||token.valor.codSN==SN_PONTO_VIRGULA))) {
			cmd(fp);
		}

		if(token.valor.codSN==SN_FECHA_CHAVE && token.tipo==SN) token=analex(fp);
		else {
			printf("ERRO, } Esperado!na linha %d",contLinha);
   	        erro();
		}
	}

	//TIPO
	else if (token.tipo == PR && (token.valor.codPR==PR_CARACTER||token.valor.codPR==PR_INTEIRO||token.valor.codPR==PR_REAL||token.valor.codPR==PR_BOOLEANO)) {

		token=analex(fp);
		if(token.tipo==ID) token=analex(fp);
		else {
			printf("ERRO, ID Esperado!na linha %d",contLinha);
   	         	erro();
		}
		if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)) {
			token=analex(fp);
			tipos_Param(fp);
			if(token.valor.codSN==SN_FECHA_PARENTESE && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, ) Esperado!na linha %d",contLinha);
	   	        erro();
			}
			if(token.valor.codSN==SN_ABRI_CHAVE && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, { Esperado!na linha %d",contLinha);
	   	        erro();
			}

			while (token.tipo==PR && (token.valor.codPR==PR_CARACTER||token.valor.codPR==PR_INTEIRO||token.valor.codPR==PR_REAL||token.valor.codPR==PR_BOOLEANO)) {
				token=analex(fp);
				if(token.tipo==ID) token=analex(fp);
				else {
					printf("ERRO, ID Esperado!na linha %d",contLinha);
		   	        erro();
				}
				while (token.tipo==SN && token.valor.codSN==SN_VIRGULA) {
					token=analex(fp);
					if(token.tipo==ID) token=analex(fp);
					else {
						printf("ERRO, ID Esperado!na linha %d",contLinha);
 		   	         	erro();
					}
				}
				if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
				else {
					printf("ERRO, ; Esperado!na linha %d",contLinha);
		   	        erro();
				}
			}

			while ((token.tipo==PR && (token.valor.codPR==PR_SE ||token.valor.codPR==PR_ENQUANTO||token.valor.codPR==PR_PARA||token.valor.codPR==PR_RETORNE))||token.tipo==ID||(token.tipo==SN && (token.valor.codSN==SN_ABRI_CHAVE||token.valor.codSN==SN_PONTO_VIRGULA))) {
				cmd(fp);
			}

			/*while (token.valor.codSN!=SN_FECHA_CHAVE) {
				cmd(fp);
			}*/

			if(token.valor.codSN==SN_FECHA_CHAVE && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, } Esperado!na linha %d",contLinha);
	   	        erro();
			}
		}

		else if (token.tipo== SN && (token.valor.codSN==SN_PONTO_VIRGULA || token.valor.codSN==SN_VIRGULA)) {
			while (token.tipo!= SN || token.valor.codSN!=SN_PONTO_VIRGULA) {
				if(token.valor.codSN==SN_VIRGULA && token.tipo==SN) token=analex(fp);
				else{
				 printf("ERRO, , Esperado!na linha %d",contLinha);
				 erro();
				}
				if(token.tipo==ID) token=analex(fp);
				else {
					printf("ERRO, ID Esperado!na linha %d",contLinha);
	   	         	erro();
				}
			}
			if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
			else {
				printf("ERRO, ; Esperado!na linha %d",contLinha);
	   	        erro();
			}
		}

		else {
			printf("ERRO, tipo errado linha %d",contLinha);
			erro();
		}


	}


	///////COMANDO (CMD)

	else if ((token.valor.codPR==PR_INICIO)&&(token.tipo==PR)) {
		printf("ERRO, inicio Esperado! na linha %d",contLinha);
		FILE * convert;
		convert = fopen ("convert.c", "w+");
		fputs("parse_info<> result = BOOST_SPIRIT_CLASSIC_NS::parse(in.c_str(),act_p,nothing_p);\nif(result.hit){", convert);
		fclose(convert);
		token=analex(fp);
	}
	
	else if ((token.valor.codPR==PR_BALLMOVETYPE)&&(token.tipo==PR)) {
						FILE * convert;
						convert = fopen ("convert.c", "a");
						fputs("string type_;\n\nresult = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>\":type\">>*space_p>>identifier_p[assign_a(type_)],nothing_p);\n\nBallMoveType typeAttrib=undefinedBallMove;\n\nif(result.hit){\n\tif(type_==\"normal\") typeAttrib=normalBallMove;\n\telse if(type_==\"fast\") typeAttrib=fastBallMove;\n\telse if(type_==\"slow\") typeAttrib=slowBallMove;\n\telse{\n\t\treturn NULL;\n\t}\n\trest=rest.substr(result.length);\n}", convert);
						fclose(convert);
						token=analex(fp);
	}

	//SE
	else if((token.valor.codPR==PR_SE)&&(token.tipo==PR)){
				token=analex(fp);
				if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
					token=analex(fp);
					if ((token.valor.codPR==PR_ACTIONS)&&(token.tipo==PR)) {
						FILE * convert;
						convert = fopen ("convert.c", "a");

						fputs("Action* act=Action::parse(in.substr(result.length), rest,parameters,players);\nif(act){", convert);
						fclose(convert);
					}
					if ((token.valor.codPR==PR_REGION)&&(token.tipo==PR)) {
						FILE * convert;
						convert = fopen ("convert.c", "a");
						fputs("\n\tstring rest;\n\tRegion* reg= Region::parse(in.substr(result.length),rest,parameters,players);\n\tif(reg){", convert);
						fclose(convert);
					}
					//expr(fp);
					token=analex(fp);
		 		 	if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)){
			 				token=analex(fp);
			 				if((token.valor.codPR==PR_THEN)&&(token.tipo==PR)){
								token=analex(fp);

								if((token.valor.codSN==SN_ABRI_CHAVE)&&(token.tipo==SN)){
									token=analex(fp);
									//while(!((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN)))
										if ((token.valor.codPR==PR_FINAL)&&(token.tipo==PR)) {
                                            FILE * convert;
											convert = fopen ("convert.c", "a");

											fputs("\n\tresult = BOOST_SPIRIT_CLASSIC_NS::parse(rest.c_str(),*space_p>>')', nothing_p);\n\tif(result.hit){\n\t\tout=rest.substr(result.length);\n\t\treturn new ActSeq(actions);\n\t}\n}", convert);
											fclose(convert);
											token=analex(fp);
										}
										
									if((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN)) token=analex(fp);
									else{
										printf("ERRO, } Esperado! na linha %d",contLinha);
							            erro();
							        }
								}
								else{
										printf("ERRO, { Esperado! na linha %d",contLinha);
							            erro();
							        }

								//cmd(fp);

		   						if((token.valor.codPR==PR_SENAO)&&(token.tipo==PR)){
									token=analex(fp);
									cmd(fp);
								}
							}
						 	else{
							    printf("ERRO, then Esperado! na linha %d",contLinha);
		   				        erro();
				        	}
					}
				 	else{
					    printf("ERRO, ) Esperado! na linha %d",contLinha);
   				        erro();
		        	}
                }
				else{
					 printf("ERRO, (  Esperado! na linha %d",contLinha);
	   				 erro();
			  	}
  	}

  	//ENQUANTO
  	else if((token.valor.codPR==PR_ENQUANTO)&&(token.tipo==PR)){

       token=analex(fp);
       if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
     		token=analex(fp);
 	 		expr(fp);

 			if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)){
 				token=analex(fp);
				cmd(fp);
         	}
        	else{
         	     printf("ERRO, ) Esperado! na linha %d",contLinha);
                 erro();
            }
     	}
 		else{
	     	printf("ERRO, (  Esperado! na linha %d",contLinha);
		    erro();
    	}
  	}

	//PARA
	else if((token.valor.codPR==PR_PARA)&&(token.tipo==PR)){
           token=analex(fp);
			   if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
		   				token=analex(fp);
						if(token.tipo!= SN || token.valor.codSN!=SN_PONTO_VIRGULA) atrib(fp);
						if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)) token=analex(fp);
						else{
         	                printf("ERRO, ; Esperado! na linha %d",contLinha);
                            erro();
	                    }


						if(!((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))) expr(fp);

						if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))token=analex(fp);
						else{
							 printf("ERRO, ; Esperado! na linha %d ",contLinha);
                             erro();
	                    }
						if(!((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN))) atrib(fp);
						if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
						else{
							printf("ERRO, ) Esperado! na linha %d",contLinha);
                            erro();
                        }
						cmd(fp);
						}
			else{
		 	  printf("ERRO, ( Esperado! na linha %d",contLinha);
              erro();
            }
	}


	//RETORNE
	else if((token.valor.codPR==PR_RETORNE)&&(token.tipo==PR))  {

	   	token=analex(fp);
		if(!((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))) expr(fp);
		if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))token=analex(fp);
		else{
	 	printf("ERRO, ; Esperado! linha %d",contLinha);
            erro();
        }
	}

	//ID
	else if(token.tipo==ID){
		token=analex(fp);
		if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
		  	token=analex(fp);
			if(!((token.tipo==SN)&&(token.valor.codSN==SN_FECHA_PARENTESE))){
  				expr(fp);
				while((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)){
					token=analex(fp);
					expr(fp);
				}
	  		}
	  		token=analex(fp);
			if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)){ token=analex(fp); }
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",contLinha);
           		erro();
     		}
		}
		else if (token.valor.codSN==SN_ATRIBUICAO && token.tipo==SN) {
			token=analex(fp);
			expr(fp);
			if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",contLinha);
           		erro();
     		}
		}
	 	else{
	 	  printf("ERRO, ( Esperado!na linha %d",contLinha);
          erro();
      	}
 	}

	// {CMD}
	else if((token.valor.codSN==SN_ABRI_CHAVE)&&(token.tipo==SN)){
		token=analex(fp);
		while(!((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN))) cmd(fp);
		if((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN)) token=analex(fp);
		else{
			printf("ERRO, } Esperado! na linha %d",contLinha);
            erro();
        }
	}

    else if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)) token=analex(fp);




	//////////////

	else if (token.tipo==CMT) {
		 token=analex(fp);
	}

	//PRECISA? CASO NAO SEJA NENHUM DOS 3
	else {
		printf("ERRO, prog invalido linha %d",contLinha);
		erro();
		}

}

	// ############################ CMD ############################3

void cmd(FILE* fp){

	//SE
	if((token.valor.codPR==PR_SE)&&(token.tipo==PR)){
				token=analex(fp);
				if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
					token=analex(fp);
					expr(fp);
		 		 	if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)){
			 				token=analex(fp);
			 				if((token.valor.codPR==PR_THEN)&&(token.tipo==PR)){
								token=analex(fp);
								cmd(fp);

		   						if((token.valor.codPR==PR_SENAO)&&(token.tipo==PR)){
									token=analex(fp);
									cmd(fp);
								}
							}
						 	else{
							    printf("ERRO, then Esperado! na linha %d",contLinha);
		   				        erro();
				        	}
					}
				 	else{
					    printf("ERRO, ) Esperado! na linha %d",contLinha);
   				        erro();
		        	}
                }
				else{
					 printf("ERRO, (  Esperado! na linha %d",contLinha);
	   				 erro();
			  	}
  	}

  	//ENQUANTO
  	else if((token.valor.codPR==PR_ENQUANTO)&&(token.tipo==PR)){

       token=analex(fp);
       if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
     		token=analex(fp);
 	 		expr(fp);

 			if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)){
 				token=analex(fp);
				cmd(fp);
         	}
        	else{
         	     printf("ERRO, ) Esperado! na linha %d",contLinha);
                 erro();
            }
     	}
 		else{
	     	printf("ERRO, (  Esperado! na linha %d",contLinha);
		    erro();
    	}
  	}

	//PARA
	else if((token.valor.codPR==PR_PARA)&&(token.tipo==PR)){
           token=analex(fp);
			   if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
		   				token=analex(fp);
						if(token.tipo!= SN || token.valor.codSN!=SN_PONTO_VIRGULA) atrib(fp);
						if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)) token=analex(fp);
						else{
         	                printf("ERRO, ; Esperado! na linha %d",contLinha);
                            erro();
	                    }


						if(!((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))) expr(fp);

						if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))token=analex(fp);
						else{
							 printf("ERRO, ; Esperado! na linha %d ",contLinha);
                             erro();
	                    }
						if(!((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN))) atrib(fp);
						if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
						else{
							printf("ERRO, ) Esperado! na linha %d",contLinha);
                            erro();
                        }
						cmd(fp);
						}
			else{
		 	  printf("ERRO, ( Esperado! na linha %d",contLinha);
              erro();
            }
	}


	//RETORNE
	else if((token.valor.codPR==PR_RETORNE)&&(token.tipo==PR))  {

	   	token=analex(fp);
		if(!((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))) expr(fp);
		if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN))token=analex(fp);
		else{
	 	printf("ERRO, ; Esperado! linha %d",contLinha);
            erro();
        }
	}

	//ID
	else if(token.tipo==ID){
		token=analex(fp);
		if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
		  	token=analex(fp);
			if(!((token.tipo==SN)&&(token.valor.codSN==SN_FECHA_PARENTESE))){
  				expr(fp);
				while((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)){
					token=analex(fp);
					expr(fp);
				}
	  		}
	  		token=analex(fp);
			if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)){ token=analex(fp); }
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",contLinha);
           		erro();
     		}
		}
		else if (token.valor.codSN==SN_ATRIBUICAO && token.tipo==SN) {
			token=analex(fp);
			expr(fp);
			if(token.valor.codSN==SN_PONTO_VIRGULA && token.tipo==SN) token=analex(fp);
	  		else{
				printf("ERRO, ;  Esperado!na linha %d",contLinha);
           		erro();
     		}
		}
	 	else{
	 	  printf("ERRO, ( Esperado!na linha %d",contLinha);
          erro();
      	}
 	}

	// {CMD}
	else if((token.valor.codSN==SN_ABRI_CHAVE)&&(token.tipo==SN)){
		token=analex(fp);
		while(!((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN))) cmd(fp);
		if((token.valor.codSN==SN_FECHA_CHAVE)&&(token.tipo==SN)) token=analex(fp);
		else{
			printf("ERRO, } Esperado! na linha %d",contLinha);
            erro();
        }
	}

    else if((token.valor.codSN==SN_PONTO_VIRGULA)&&(token.tipo==SN)) token=analex(fp);

  	else {
  		printf("ERRO, Comando Esperado!na linha %d",contLinha);
    	erro();
    }

}

//######################################### ATRIB ######################################



void atrib(FILE* fp){
	 if(token.tipo==ID){
	 			token=analex(fp);
				if((token.valor.codSN==SN_ATRIBUICAO)&&(token.tipo==SN)){
							token=analex(fp);
							expr(fp);
				 }
				else
				{
				  printf("ERRO, = Esperado! na linha %d",contLinha);
	 		   	  erro();
			 	 }
				 }
				 else
				 {
				  printf("ERRO, ID Esperado! na linha %d",contLinha);
	 		   	  erro();
			 	 }
}

// ################################### EXPR ###############################3

void expr(FILE* fp){
           expr_Simp(fp);
           if(op_Rel(fp)) expr_Simp(fp);

		   }

// ############################ EXPR_SIMP ################################

void expr_Simp(FILE* fp){

	 if((token.valor.codSN==SN_MAIS||token.valor.codSN==SN_MENOS)&&(token.tipo==SN)) token=analex(fp);
	 termo(fp);

	 while(((token.valor.codSN==SN_MAIS)||(token.valor.codSN==SN_MENOS)||(token.valor.codSN==SN_OR))&&(token.tipo==SN)){
	 							token=analex(fp);
								termo(fp);
								}
}


// ############################# TERMO ####################################


void termo(FILE* fp){
	   fator(fp);
	   while(((token.valor.codSN==SN_VEZES)||(token.valor.codSN==SN_DIVISAO)||(token.valor.codSN==SN_AND))&&(token.tipo==SN)){

	   										token=analex(fp);
											fator(fp);
											}
}

// ############################ FATOR ############################

void fator(FILE* fp){

	 if((token.tipo==CTI)|| (token.tipo==CTR)|| (token.tipo==CTC)|| (token.tipo==CTL)) {
	    token=analex(fp);
	}
	else if((token.valor.codSN==SN_NEGACAO)&&(token.tipo==SN)){
		token=analex(fp);
		fator(fp);
	}

	else if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
		token=analex(fp);
		expr(fp);
		if(!((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN))){
			printf("ERRO, )  Esperado! na linha %d",contLinha);
	 		erro();
		}
		token=analex(fp);
	}

	else if(token.tipo==ID){
		token=analex(fp);
		if((token.valor.codSN==SN_ABRI_PARENTESE)&&(token.tipo==SN)){
			token=analex(fp);
			if( token.valor.codSN!=SN_FECHA_PARENTESE){
		 	   	expr(fp);
				while((token.valor.codSN==SN_VIRGULA)&&(token.tipo==SN)){
					token=analex(fp);
					expr(fp);
				}
			}
			if((token.valor.codSN==SN_FECHA_PARENTESE)&&(token.tipo==SN)) token=analex(fp);
			else{
				printf("ERRO, ) Esperado! na linha %d",contLinha);
	            erro();
	        }
		}
	}

	else{
   		printf("ERRO, fator Esperado! na linha %d",contLinha);
   		printf("token erro: %d",token.lexema);
        erro();
	}

 }

 //################################## OP_ REL ###################################


 int op_Rel(FILE* fp){

	  if(token.tipo==SN){
		 if( token.valor.codSN==SN_IGUALDADE || token.valor.codSN==SN_DIFERENTE || token.valor.codSN==SN_MENOR || token.valor.codSN==SN_MENOR_IGUAL || token.valor.codSN==SN_MAIOR || token.valor.codSN==SN_MAIOR_IGUAL ){
           token=analex(fp);
           return 1;
		   }
		   }
		   else
		   return 0;
		   return 0;
}
