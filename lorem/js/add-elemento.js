var county = 0;

function add_elemento() {
 
   
    let ref = document.createElement("input");
    let x = document.getElementById("form");

    let pos = x.childElementCount;

    let brk = document.createElement("br");


    let titulo = document.createElement("input");
    let principal = document.createElement("textarea");
    let contador = document.createElement("input");

    titulo.setAttribute("name", "titulo" );
    titulo.setAttribute("type", "text");
    titulo.classList.add('txt-titulo');
    ref.setAttribute("name", "ref" + county);
	ref.setAttribute("placeholder", "Link da Referência");
	
    principal.setAttribute("name", "principal" );
    principal.classList.add('txt-input');
    

    contador.setAttribute("type", "hidden");    
    contador.setAttribute("name", "contador");   
    contador.setAttribute("value");  
    contador.cclassList.add('txt-contador')

    x.insertBefore(principal, x.childNodes[pos]);

    x.insertBefore(titulo, x.childNodes[pos]);
   
    x.insertBefore(brk, x.childNodes[pos]);

    x.insertBefore(contador, x.childNodes[pos]);
    county+=1;
     
}