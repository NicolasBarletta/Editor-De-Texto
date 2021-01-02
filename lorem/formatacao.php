<?php
$conf = 0;
$add = "";
$limite = 0;
include './php/finalizado.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

      <link rel="stylesheet" href="./style/final.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Páginas</title>
      <html>

      <link rel="stylesheet" href="./global/pages.css">
    <link rel="stylesheet" href="css/TesteCores/style.css">
    <link rel="stylesheet" href="./global/nav.css">

</head>
<body>
      <div id="bodyy">  
      <div class="menu" id="menu">
          
         <button type="button" id="back" onclick="window.history.back()">Voltar</button>
          <!-- Fim menu-->
      </div>
<div id="print_map">
      <div class="folha"> 
           <?php echo "<b> $instituicao </b> <br><br><br><br><br><br>
           $nome <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           <b> $nome_titulo</b> <br>
           $subtitulo <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           $cidade - $estado <br>
           $ano"; ?>
      </div>
      <br>
      <br>

    
      <div class="direita">
            <div class="caixa">
                   <p><?php echo "$breake $dedicatoria"; ?></p>
            </div>
     
      </div>
      <br>
      <br>

      <div class="direita">
            <div class="caixa">
                  <p><?php echo "$breake $agradecimento"; ?></p>
            </div>
      </div>
      <br>
      <br>

      <div class="direita">
            <div class="caixa">
                  <p><?php echo "$breake $epigrafe"; ?></p>
            </div>
      </div>
      <br>
      <br>

		<div class="pagina">
            <b>SUMÁRIO</b>
			<br>
            <p><?php echo $sum; ?></p>
          
      </div>
      <br>
      <br>

 
           <?php echo $conteudo; ?>

	<div class="pagina"> 
		<b>BIBLIOGRAFIA</b>
		<br>
		<?php echo $bibli; ?>
	
	</div>
    
</div> 
<div class='submitButton'>

<input type="button" id='gerarPDF'value="Gerar PDF" onclick="printDiv()">   
</div>
</div>
</body>

	<script src="./js/print.js"></script>
</html> 


 