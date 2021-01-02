<html>
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="./global/editor.css">
    <link rel="stylesheet" href="./global/global.css">
    <link rel="stylesheet" href="./global/nav.css">
    <title>Editor</title>
  </head>  
  <body>
    <div class="container">
    <div id="bodyy"> 
        <div class="menu" id="menu">
       
         <button type="button" id="back" onclick="window.history.back()">Voltar</button>
          <!-- Fim menu-->
        </div>
        <form id="form" method="POST" action="./formatacao.php">
          <div class="conteudo-fixo">
            <div class="inp-capa">
              <div class="input-block">
                <label for="instituicao">Instituição</label>
                <input type="text" name="instituicao" >
               </div>
              <div class="input-block">
                <label for="nome">Nome</label>
                <input type="text" name="nome" >
              </div>
              <div class="input-block">
                <label for="nome_titulo">Nome do trabalho</label>
                <input type="text" name="nome_titulo" >
              </div>
              <div class="input-block">
                <label for="subtitulo">Subtitulo</label>
                <input type="text" name="subtitulo" >
              </div>
              <div class="input-block">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" >
              </div>
              <div class="input-block">
                <label for="estado">Estado</label>
                <input type="text" name="estado">
              </div>
              <div class="input-block">
                <label for="ano">Ano atual</label>
                <input type="text" name="ano" id="ano" >
              </div>
          </div>


          <div class="inp-lateral">
            <label for="dedicatoria">Digite a dedicatória</label> 
            <textarea name="dedicatoria" id="text-area" cols="14" rows="6"></textarea>
          </div>

          <div class="inp-lateral">
            <label for="agradecimento">Digite o agradecimento</label>
              <textarea name="agradecimento" id="text-area" cols="14" rows="6"></textarea>
          </div>

          <div class="inp-lateral">
            <label for="epigrafe"> Digite a citação</label>
            <textarea name="epigrafe" id="text-area" cols="14" rows="6"></textarea>
          </div>

         

         
          <div class="input-block" id="refe">
				
            <input type="button" value="Adicionar bibliografia" onclick="add_ref()">
          </div>
         

        </div>

        <div class='input-block'>
          <input type="button" value="Adicionar Capitulo" onclick="add_elemento()" >
        </div>
        <button class="enviar" type="submit">Enviar</button>
        </form>

      </div>
</div>
  </body>
  
  <script src="./js/add_ref.js"></script>
  <script src="./js/add-elemento.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
