var county = 0;
var brk = document.createElement("br");

function add_ref(){
    var y = document.getElementById("refe");
    var posy = y.childElementCount;

	var nomesite = document.createElement("input");
	var materia = document.createElement("input");
    var ref = document.createElement("input");
	var data = document.createElement("input");
    var contadory = document.createElement("input");


	nomesite.setAttribute("name", "nomesite" + county);
	nomesite.setAttribute("placeholder", "Nome do Site");

	materia.setAttribute("name", "materia" + county);
	materia.setAttribute("placeholder", "Nome da Matéria");
	
    ref.setAttribute("name", "ref" + county);
	ref.setAttribute("placeholder", "Link da Referência");
	
	data.setAttribute("name", "data" + county);
	data.setAttribute("placeholder", "Data de Acesso");
    
	contadory.setAttribute("type", "hidden");    
    contadory.setAttribute("name", "contadory");   
    contadory.setAttribute("value", county); 


    y.insertBefore(data, y.childNodes[posy]);
    y.insertBefore(ref, y.childNodes[posy]);
	y.insertBefore(materia, y.childNodes[posy]);
	y.insertBefore(nomesite, y.childNodes[posy]);
	
    y.insertBefore(contadory, y.childNodes[posy]);
     county+=1;
}