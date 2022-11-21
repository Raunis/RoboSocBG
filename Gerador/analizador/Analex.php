<?php
class Token {
    public $tipo;         //Categoria
    public $lexema; 
    public $comentario;
    public $codPR;        //palReservada
    public $codSN;        //sinal
    public $valorInt;
    public $valorReal;
    public $posLiteral;
    public $msgm;
    public $codErro;
}
class Lexico {

public $PR_QTD    = 18;
public $PR_TAM    = 16;
public $CTL_QTD   = 300;
public $CTL_TAM   = 300;
public $SN_QTD    = 20;
public $SN_TAM    = 3;
public $NUM_TAM   = 25;
public $ID_TAM    = 33;
public $EOS       = '\0';
public $EOF       = '¨';


public $ultimo    = -1;  //posicao da ultima constante literal inserida na this->tabCTL
public $contLinha = 1;   //contador de linhas
public $posicao = -1;

/*
typedef struct {
  Categoria tipo;
  char lexema[ID_TAM];
  char comentario[2000];
  union campo {
    PalReservada  codPR;
    Sinal     codSN;
    int       valorInt;
    double      valorReal;
    int       posLiteral;
  } valor;
}Token;
*/

public $palReservada = [
  "PR_SEMRETORNO",    "PR_CARACTER",  "PR_INTEIRO",   "PR_REAL",
  "PR_BOOLEANO",      "PR_SEMPARAM",  "PR_SE",        "PR_SENAO",
  "PR_ENQUANTO",      "PR_PARA",      "PR_RETORNE",   "PR_THEN",
  "PR_PROTOTIPO",     "PR_ACTIONS",   "PR_FINAL",     "PR_REGION",
  "PR_BALLMOVETYPE",  "PR_INICIO"
];

public $tabPR /*[this->PR_QTD] [PR_TAM]*/ = [ //tabela de simbolos de palavras-reservadas
  "semretorno",    "caracter",    "inteiro",     "real",
  "booleano",      "semparam",    "if",          "senao",
  "enquanto",      "para",        "retorne",     "then",
  "prototipo",     "actions",     "final",       "region",
  "ballmovetype",  "inicio" ];

public $tabCTL /*[CTL_QTD][CTL_TAM]*/;   //tabela de simbolos de constantes literais



//NÃO é UTILIZADO!!!

public $sinal = [
  "SN_DIFERENTE", "SN_NEGACAO",         "SN_MAIS",            "SN_MENOS",       "SN_VEZES",
  "SN_DIVISAO",   "SN_MENOR_IGUAL",     "SN_MENOR",           "SN_MAIOR_IGUAL", "SN_MAIOR",
  "SN_IGUALDADE", "SN_ATRIBUICAO",      "SN_AND",             "SN_OR",          "SN_PONTO_VIRGULA",
  "SN_VIRGULA",   "SN_ABRI_PARENTESE",  "SN_FECHA_PARENTESE", "SN_ABRI_CHAVE",  "SN_FECHA_CHAVE"
];

public $tabSN = [ //tabela sinais e simbolos
  "!=", "!",  
  "+",  "-",  
  "*",  "/",  
  "<=", "<",  
  ">=", ">",
  "==", "=",  
  "&&", "||", 
  ";",  ",",  
  "(",  ")",  
  "{",  "}" ];

  public $categoria = [
  "ID",    //  identificador
  "PR",    //  palavra-reservada
  "CTC",   //  constante caracter
  "SN",    //  sinal
  "CTL",   //  constante literal (string)
  "CTR",   //  constante real
  "CTI",   //  constante inteira
  "CMT",   //  comentario
  "FA",    //  final do arquivo
  "INV"    //  token invalido
];

  //ATE AQUI



function buscarTabPR($lexema /*[ID_TAM]*/) {
  $palavra = implode($lexema);
  for ($i = 0; $i < $this->PR_QTD; $i++) {
    if (strcmp ($this->tabPR[$i], $palavra) == 0) {return $i;} //encontrou
  }
  return -1; //nao encontrou
}

function inserirTabCTL ($literal/*[CTL_TAM]*/) {

  if ($this->ultimo != -1) {
         $i = 0;
    while ($i <= $this->ultimo) {
      if (strcmp ($this->tabCTL[$i], $literal) == 0) return $i;
      $i++;
    }
  }

  if ($this->ultimo + 1 >= $CTL_QTD)
    printf("quantidade maxima de literais atingido");

  else {  //nao encontrou
        $this->ultimo++;
    strcpy ($this->tabCTL[$this->ultimo], $literal); //insere
    return $this->ultimo; //retorna a posicao
  }
}


function analex($codigo) {

  //char literal[CTL_TAM]; //armazena temporariamente a constante literal
  //char num[NUM_TAM];    //armazena temporariamente a constante inteira e real
  $literal;
  $num;
  // $codigo;  //JÁ ESTÁ LÁ NO PARÂMETRO
  $estado = 0;
  $pos = 0;

  //Token token;

  //$obj = new MyStruct();
  //$obj->foo = 'Hello';
  //$obj->bar = 'World';

  $token = new Token();

  while (1) {

    switch ($estado) {

    case 0:

      $this->posicao ++;      

      if ($codigo[$this->posicao] == ' ' || $codigo[$this->posicao] == "\t")  //espacos em branco e tab
        $estado = 0;
      else if ($codigo[$this->posicao] == "\n")   //newLine e linha ++
        $estado = 21;
      else if ($codigo[$this->posicao] == '(')
        $estado = 45;
      else if ($codigo[$this->posicao] == ')')
        $estado = 47;
      else if ($codigo[$this->posicao] == '!')
        $estado = 19;
      else if ($codigo[$this->posicao] == '+')
        $estado = 27;
      else if ($codigo[$this->posicao] == '*')
        $estado = 31;
      else if ($codigo[$this->posicao] == '/')
        $estado = 33;
      else if ($codigo[$this->posicao] == '=')
        $estado = 23;
      else if ($codigo[$this->posicao] == '<')
        $estado  = 14;
      else if ($codigo[$this->posicao] == '>')
        $estado = 10;
      else if ($codigo[$this->posicao] == '|')
        $estado = 35;
      else if ($codigo[$this->posicao] == '&')
        $estado = 38;
      else if ($codigo[$this->posicao] == '-')
        $estado = 29;
      else if ($codigo[$this->posicao] == ',')
        $estado = 42;
      else if ($codigo[$this->posicao] == ';')
        $estado = 3;
      else if ($codigo[$this->posicao] == '\'')   //constantes caracteres
        $estado = 44;
      else if ($codigo[$this->posicao] == '\"')   //constantes literais
        $estado = 26;
      else if ($codigo[$this->posicao] == '{')
        $estado = 41;
      else if ($codigo[$this->posicao] == '}')
        $estado = 43;
      else if ($codigo[$this->posicao]== '#')   //¨=EOF=final do arquivo
        $estado = 9;
      else if (IntlChar::isalpha($codigo[$this->posicao]))  //palavras-reservadas e identificadores
        $estado = 1;
      else if (IntlChar::isdigit($codigo[$this->posicao]))  //constantes inteiras e reais
        $estado = 4;
      else
        $estado = 49;    //ERRO: caractere invï¿½lido


      break;


    case 1:
      $token->lexema[$pos] = $codigo[$this->posicao];
      $this->posicao ++;
      $pos++;
      if ($pos >= $this->ID_TAM)
        echo"Linha: ".$this->contLinha. "- Comprimento do ID muito grande";
      if (IntlChar::isalnum($codigo[$this->posicao]) || $codigo[$this->posicao] == '_')
        $estado = 1;
      else {
        //$token->lexema[$pos] = $this->EOS;
        $estado = 2;
      }
      break;

    case 2:
      $this->posicao --;
      $p = $this::buscarTabPR($token->lexema);
      if ($p == -1) $token->tipo = "ID";
      else {
        $token->tipo = "PR";
        $token->codPR = $this->palReservada[$p];
      }
      return $token;
      break;

    case 3:
      echo $codigo[$this->posicao];
      $token->tipo = "SN";
      $token->lexema = ";";
      $token->codSN = "SN_PONTO_VIRGULA";
      return $token;
      break;

    case 4:
      $num[$pos] = $codigo[$this->posicao];
      $this->posicao ++;
      $pos++;
      if ($pos >= $NUM_TAM)
        printf("Linha: %i - Comprimento da constante real ou inteira muito grande", $this->contLinha);
      if (IntlChar::isdigit($codigo[$this->posicao])) $estado = 4;
      else if ($codigo[$this->posicao] == '.') {
        $num[$pos] = $codigo[$this->posicao];
        $pos++;
        if ($pos >= $NUM_TAM)
          printf("Linha: %i - Comprimento da constante real ou inteira muito grande", $this->contLinha);
        $estado = 5;
      }
      else {
        $num[$pos] = $this->EOS;
        $estado = 8;
      }
      break;

    case 5:
      $this->posicao ++;
      if (IntlChar::isdigit($codigo[$this->posicao])) $estado = 6;
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 6:
      $num[$pos] = $codigo[$this->posicao];
      $this->posicao ++;
      $pos++;
      if ($pos >= $NUM_TAM)
        printf("Linha: %i - Comprimento da constante real ou inteira muito grande", $this->contLinha);
      if (IntlChar::isdigit($codigo[$this->posicao])) $estado = 6;
      else {
        $num[$pos] = $this->EOS;
        $estado = 7;
      }
      break;

    case 7:
      $this->posicao --;
      $token->tipo = "CTR";
      //$token->valorReal = atof($num);
      $token->valorReal = floatval($num);
      return $token;
      break;

    case 8:
      $this->posicao --;
      $token->tipo = "CTI";
      //$token->valorInt = atoi($num);
      $token->valorInt = intval($num);
      return $token;

    case 9:
      $token->tipo = "FA";
      $token->comentario = "Final do Arquivo";
      return $token;
      break;

    case 10:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '=') $estado = 11;
      else $estado = 12;
      break;

    case 11:
      $token->tipo = "SN";
      strcpy ($token->lexema, ">=");
      $token->codSN = "SN_MAIOR_IGUAL";
      return $token;
      break;

    case 12:
      $this->posicao --;
      $token->tipo = "SN";
      strcpy ($token->lexema, ">");
      $token->codSN = "SN_MAIOR";
      return $token;
      break;

    case 13:
      $token->tipo = "CTL";
      $token->posLiteral = inserirTabCTL($literal);
      return $token;
      break;

    case 14:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '=') $estado = 15;
      else $estado = 16;
      break;

    case 15:
      $token->tipo = "SN";
      strcpy ($token->lexema, "<=");
      $token->codSN = "SN_MENOR_IGUAL";
      return $token;
      break;

    case 16:
      $this->posicao --;
      $token->tipo = "SN";
      strcpy ($token->lexema, "<");
      $token->codSN = "SN_MENOR";
      return $token;
      break;

    case 17:
      $token->tipo = "CTC";
      return $token;
      break;

    case 18:
      break;

    case 19:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '=') $estado = 20;
      else $estado = 22;
      break;

    case 20:
      $token->tipo = "SN";
      strcpy ($token->lexema, "!=");
      $token->codSN = "SN_DIFERENTE";
      return $token;
      break;

    case 21:
      $this->contLinha++;
      $estado = 0;
      break;

    case 22:
      $this->posicao --;
      $token->tipo = "SN";
      strcpy ($token->lexema, "!");
      $token->codSN = "SN_NEGACAO";
      return $token;
      break;

    case 23:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '=') $estado = 24;
      else $estado = 25;
      break;

    case 24:
      $token->tipo = "SN";
      strcpy ($token->lexema, "==");
      $token->codSN = "SN_IGUALDADE";
      return $token;
      break;

    case 25:
      $this->posicao --;
      $token->tipo = "SN";
      strcpy ($token->lexema, "=");
      $token->codSN = "SN_ATRIBUICAO";
      return $token;
      break;

    case 26:
      $this->posicao ++;
      if (isprint($codigo[$this->posicao]) && $codigo[$this->posicao] != '\"' && $codigo[$this->posicao] != '\n') $estado = 28;
      else if ($codigo[$this->posicao] == '\"') {
        $token->valorInt = -1; //ausencia de caractere
        $estado = 13;
      }
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 27:
      $token->tipo = "SN";
      strcpy ($token->lexema, "+"); //strcpy ($token->lexema, tabSN[SN_MAIS]);
      $token->codSN = "SN_MAIS";
      return $token;
      break;

    case 28:
      $literal[$pos] = $codigo[$this->posicao];
      $this->posicao ++;
      $pos++;

      if ($pos >= $CTL_TAM)
        printf("Linha: %i - Comprimento da constante literal muito grande", $this->contLinha);
      if (isprint($codigo[$this->posicao]) && $codigo[$this->posicao] != '\"' && $codigo[$this->posicao] != '\n') $estado = 28;
      else if ($codigo[$this->posicao] == '\"') {
        $literal[$pos] = $this->EOS;
        $estado = 13;
      }
      else printf("Linha: %i - token invalido", $this->contLinha);
      break;

    case 29:
      $token->tipo = "SN";
      strcpy ($token->lexema, "-");
      $token->codSN = "SN_MENOS";
      return $token;
      break;

    case 30:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '*') {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 34;
        }
      else if ($codigo[$this->posicao]==$this->EOF) {
        $estado = 37;
      }
      else {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 32;
        }
      if ($codigo[$this->posicao]=='\n') $this->contLinha++;
      break;

    case 31:
      $token->tipo = "SN";
      strcpy ($token->lexema, "*");
      $token->codSN = "SN_VEZES";
      return $token;
      break;

    case 32:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '*') {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 34;
        }
      else {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 32;
      }
      if ($codigo[$this->posicao]==$this->EOF) {
        $estado = 37;
      }
      if ($codigo[$this->posicao]=='\n') $this->contLinha++;
      break;

    case 33:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '*') $estado = 30;
      else $estado = 40;
      break;

    case 34:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '*') {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 34;
      }
      else if ($codigo[$this->posicao] == '/') {
        $pos--;
        $estado = 37;
      }
      else if ($codigo[$this->posicao]==$this->EOF) {
        $estado = 37;
      }
      else {
        $token->comentario[$pos] = $codigo[$this->posicao];
        $pos++;
        $estado = 32;
      }
      if ($codigo[$this->posicao]=='\n') $this->contLinha++;
      break;

    case 35:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '|') $estado = 36;
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 36:
      $token->tipo = "SN";
      strcpy ($token->lexema, "||");
      $token->codSN = "SN_OR";
      return $token;
      break;

    case 37:
      $token->tipo = "CMT";
      $token->comentario[$pos] = $this->EOS;
      return $token;
      $estado = 0;
      break;

    case 38:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '&') $estado = 39;
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 39:
      $token->tipo = "SN";
      strcpy ($token->lexema, "&&");
      $token->codSN = "SN_AND";
      return $token;
      break;

    case 40:
      $this->posicao --;
      $token->tipo = "SN";
      strcpy ($token->lexema, "/");
      $token->codSN = "SN_DIVISAO";
      return $token;
      break;

    case 41:
      $token->tipo = "SN";
      $token->lexema = "{";
      $token->codSN = "SN_ABRI_CHAVE";
      return $token;
      break;

    case 42:
      $token->tipo = "SN";
      strcpy ($token->lexema, ",");
      $token->codSN = "SN_VIRGULA";
      return $token;
      break;

    case 43:
      $token->tipo = "SN";
      $token->lexema = "}";
      $token->codSN = "SN_FECHA_CHAVE";
      return $token;
      break;

    case 44:
      $this->posicao ++;
      if ($codigo[$this->posicao] == '\\') $estado = 48;
      else if (isprint($codigo[$this->posicao]) && $codigo[$this->posicao] != '\'') $estado = 46;
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 45:
      $token->tipo = "SN";
      $token->lexema = "(";
      $token->codSN = "SN_ABRI_PARENTESE";
      return $token;
      break;

    case 46:
      $token->valorInt = $codigo[$this->posicao];
      $this->posicao ++;
      if ($codigo[$this->posicao] == '\'') $estado = 17;
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 47:
      $token->tipo = "SN";
      $token->lexema = ")";
      $token->codSN = "SN_FECHA_PARENTESE";
      return $token;
      break;

    case 48:
      $this->posicao ++;
      if ($codigo[$this->posicao] == 'n') {
        $codigo[$this->posicao] = '\n';
        $estado = 46;
      }
      else if ($codigo[$this->posicao] == '0') {
        $codigo[$this->posicao] = '\0';
        $estado = 46;
      }
      else printf("Linha: %i - Token invalido", $this->contLinha);
      break;

    case 49:
      printf("\nLinha: %i - Token %c invalido AQUI", $this->contLinha,$codigo[$this->posicao]);
      $token->tipo = "INV";
      return $token;
      break;

    default:
      printf("Linha: %i - Caracter invalido", $this->contLinha);
    }
  }
}


function imprimir($token) {

  switch ($token->tipo) {

  case "PR":
    printf ("\n< PR , posicao %s, %s>", $token->codPR, $token->lexema);
    break;

  case "ID":
    printf ("\n< ID , %s >",$token->lexema);
    break;

  case "CTL":
    printf ("\n< CTL, posicao %d, %s>", $token->posLiteral, $this->tabCTL[$token->posLiteral]);
    break;

  case "CTI":
    printf ("\n< CTI, %d >", $token->valorInt);
    break;

  case "CTC":
    if ($token->valorInt == -1) printf ("\n< CTC, \'\' >");
    else if ($token->valorInt == '\n') printf ("\n< CTC, \\n >");
    else if ($token->valorInt == '\0') printf ("\n< CTC, \\0 >");
    else printf ("\n< CTC, %c >", $token->valorInt);
    break;

  case "SN":
    printf ("\n< SN , posicao %d, %s>", $token->codSN,$token->lexema);
    break;

  case "CTR":
    printf ("\n< CTR, %f >", $token->valorReal);
    break;

  case "FA":
    printf ("\n< FA , %s >", $token->comentario);
    break;

  case "CMT":
    printf ("\n< CMT ,  %s >", $token->comentario);
    break;

  case "INV":

    break;
  }
}

/*
FILE* abrirArq () {
  char arquivo[25];  //nome do arquivo com no max 25 caracteres
  FILE* fp;

  printf ("Digite o nome do arquivo que deseja abrir:");
  gets (arquivo);
  fflush (stdin);

  if ((fp = fopen (arquivo, "rt")) == NULL) {
    printf ("\n\tO arquivo nao pode ser aberto.\n\nPressione Enter para sair.");
    getchar();
    fflush(stdin);
    exit (1);
  }

  return (fp);
}


void fecharArq (FILE* fp) {
  if (fclose(fp)) { //retorna zero se a operação de fechamento for bem-sucedida
    printf ("\n\tO arquivo nao pode ser fechado.\n\nPressione Enter para sair.");
    getchar();
    fflush(stdin);
    exit (1);
  }
}*/

}
?>