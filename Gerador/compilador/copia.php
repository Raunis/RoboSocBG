

<?php
     		 // -------------------------------------------------------------------  
			 // Copia o Diretório Fonte dado com todos seus sub-diretórios e   
			 // arquivos para o Diretório Destino indicado:  
			 // Obs.:  - Função recursiva;  
			 //       
			 //     - $DirDest deverá ser completo, com o nome do  
			 //      diretório a ser criado.  
			 // -------------------------------------------------------------------  
			 function CopiaDir($DirFont, $DirDest){  
			   mkdir($DirDest);  
			   if ($dd = opendir($DirFont)) {  
			     while (false !== ($Arq = readdir($dd))) {  
			       if($Arq != "." && $Arq != ".."){  
			         $PathIn = "$DirFont/$Arq";  
			         $PathOut = "$DirDest/$Arq";  
			         if(is_dir($PathIn)){  
			           CopiaDir($PathIn, $PathOut);  
			         }elseif(is_file($PathIn)){  
			           copy($PathIn, $PathOut);  
			         }  
			       }  
			     }  
			     closedir($dd);  
			   }  
			 }  

			 function recurse_copy($src,$dst) { 
			    $dir = opendir($src); 
			    @mkdir($dst); 
			    while(false !== ( $file = readdir($dir)) ) { 
			        if (( $file != '.' ) && ( $file != '..' )) { 
			            if ( is_dir($src . '/' . $file) ) { 
			                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
			            } 
			            else { 
			                copy($src . '/' . $file,$dst . '/' . $file); 
			            } 
			        } 
			    } 
			    closedir($dir); 
			} 


			function copiar_diretorio($diretorio, $destino, $ver_acao = false){
			      if ($destino{strlen($destino) - 1} == '/'){
			         $destino = substr($destino, 0, -1);
			        }
			      if (!is_dir($destino)){
			         if ($ver_acao){
			            echo "Criando diretorio {$destino}\n";
			            }
			         mkdir($destino, 0755);
			      }

			      $folder = opendir($diretorio);

			      while ($item = readdir($folder)){
			         if ($item == '.' || $item == '..'){
			            continue;
			            }
			         if (is_dir("{$diretorio}/{$item}")){
			            copy_dir("{$diretorio}/{$item}", "{$destino}/{$item}", $ver_acao);
			         }else{
			            if ($ver_acao){
			               echo "Copiando {$item} para {$destino}"."\n";
			            }
			            copy("{$diretorio}/{$item}", "{$destino}/{$item}");
			            }
			      }
			   }


			 $DirFont="../../../splanner";
			 $DirDest="../versionamento/splanner";

			 //recurse_copy($DirFont, $DirDest); 

			//backup do splanner
			$value = exec('bash ./copia.sh');

			echo $value;
			    	    
		
?>

