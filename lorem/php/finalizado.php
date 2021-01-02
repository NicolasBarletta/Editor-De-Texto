
    <?php 

$breake = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
$pag = 7;
$num = 0;
$sum = "";

$instituicao = strtoupper($_POST["instituicao"]);
$nome = strtoupper($_POST["nome"]);
$nome_titulo = strtoupper($_POST["nome_titulo"]);
$subtitulo = strtoupper($_POST["subtitulo"]);
$cidade = strtoupper($_POST["cidade"]);
$estado = strtoupper($_POST["estado"]);
$ano = strtoupper($_POST["ano"]);

$nomesite = array();
$data = array();
$materia = array();
$link = array();
$bibli = "";

$dedicatoria = ($_POST["dedicatoria"]);
$agradecimento = ($_POST["agradecimento"]);
$epigrafe = ($_POST["epigrafe"]);


$contador = $_POST["contador"];
$contadory = $_POST["contadory"];


$titulo = array();
$principal = array();
$conteudo ="";
   
   
   
         for($x = 0; $x <= $contador; $x++){
            
            
            $count = strval($x);
            $titulo_novo = $_POST["titulo".+$count];
            $principal_novo = $_POST["principal".+$count];
            array_push($titulo , $titulo_novo);
            array_push($principal , $principal_novo);   

            $principal[$x] = $add . $principal[$x];
            $limite = strlen($principal[$x]);
			
				$num = $x+1;
				  $sum .= "$num . $titulo[$x] ................................................................................................ $pag <br>";
                  $conteudo.='<div class= "pagina">';//abre div
                  $conteudo.="<h1>";//criando titulo
                  $conteudo.=$x+1;
                  $conteudo.=". ";
                  $conteudo.= $titulo[$x];
                  $conteudo.= "</h1>" ;//fim criando titulo
            

            
            if(strlen($principal[$x])  > 2893 || strlen($add) > 2893){
                 $limite = $limite - 2893; 
                 if(strlen($add) <= 2893){
                       $add =  substr($principal[$x], 2893, $limite);
                       $principal[$x] = substr($principal[$x], 0, 2893);
                       if($conf == 0){
                              $conteudo.= "<p>" ; //criando assunto
                              $conteudo.=$principal[$x];
                              $conteudo.= "</p>" ; //fim assunto
                              $conteudo.= "</div>" ; //fim assunto
							  
							   $conteudo .= '<div style = "padding-left: 600px; background-color: white; width: 1.72in ; font-family: arial">';
							  $conteudo .= $pag;
							  $conteudo .= "</div>";
							  $pag += 1;
							  
                              $conteudo.="</br>";
							  $conteudo.="</br>";
                       }else{
                        $conteudo.='<div class= "pagina">';//abre div
                        $conteudo.= "<p>" ; //criando assunto
                        $conteudo.=$principal[$x];
                        $conteudo.= "</p>" ; //fim assunto
                        $conteudo.= "</div>" ; //fim assunto
						
						 $conteudo .= '<div style = "padding-left: 600px; background-color: white; width: 1.72in ; font-family: arial">';
						$conteudo .= $pag;
						$conteudo .= "</div>";
						$pag += 1;
                       }
					}
                 if(strlen($add) > 2893){
                  while(strlen($add) > 2893){
                        $limite = strlen($add);
                        $limite = $limite - 2893;
                        $conteudo.='<div class= "pagina">';//abre div
                   $conteudo.= "<p>" ; //criando assunto
                   $conteudo.=substr($add, 0, 2893);
                   $conteudo.= "</p>" ; //fim assunto
                   $conteudo.= "</div>" ; //fim assunto
				   
				   $conteudo .= '<div style = "padding-left: 600px; background-color: white; width: 1.72in ; font-family: arial">';
					$conteudo .= $pag;
					$conteudo .= "</div>";
					$pag += 1;
                   $conteudo.="</br>";
                   $conteudo.="</br>";
                   
                   $add = substr($add, 2893, $limite);       
                  }

                  $conteudo.='<div class= "pagina">';//abre div
                  $conteudo.= "<p>" ; //criando assunto
                   $conteudo.=$add;
                   $conteudo.= "</p>" ; //fim assunto
				   		 $conteudo.= "</div>" ; //fim assunto
						 
						 $conteudo .= '<div style = "padding-left: 600px; background-color: white; width: 1.72in ; font-family: arial">';
						$conteudo .= $pag;
						$conteudo .= "</div>";
						$pag += 1;
							  
                  $add = "";
				  $conteudo.="</br>";
                   $conteudo.="</br>";
	
				}	
            
            }else{
				 $conteudo.= "<p>" ; //criando assunto
                 $conteudo.=$principal[$x];
                 $conteudo.= "</p>" ; //fim assunto
				 $conteudo.= "</div>" ; //fim assunto
				 
				 $conteudo .= '<div style = "padding-left: 600px; background-color: white; width: 1.72in ; font-family: arial">';
				$conteudo .= $pag;
				$conteudo .= "</div>";
							  $pag += 1;
				  $conteudo.="</br>";
                   $conteudo.="</br>";
				 
			}     
             


		}
      
     for($x = 0; $x <= $contadory; $x++){
		  $count = strval($x);
		  $nomesite_novo = $_POST["nomesite".+$count];
          $materia_novo = $_POST["materia".+$count];
          $ref_novo = $_POST["ref".+$count];
		  $data_novo = $_POST["data".+$count];
          array_push($nomesite , $nomesite_novo);
		  array_push($materia , $materia_novo);
		  array_push($link , $ref_novo);
          array_push($data , $data_novo);   
		  
		$bibli = "$materia[$x],<b>$nomesite[$x]</b>. Disponivel em: $link[$x]. Acesso em: $data[$x]. <br>";
		  
	  }
   
?>



