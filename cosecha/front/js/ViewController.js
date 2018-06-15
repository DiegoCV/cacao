/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mínimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// ADMINISTRADOR \\\\\\\\\\
function preAdministradorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/administrador/AdministradorInsert.php',postAdministradorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postAdministradorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			//alert("Administrador registrado con éxito");
            window.location.href = "login.html";
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preAdministradorList(container){
     //Solicite información del servidor
     cargaContenido(container,'AdministradorList.html'); 
 	enviar("",'../back/outerController/administrador/AdministradorList.php',postAdministradorList); 
}

 function postAdministradorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("AdministradorList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// AGENDA \\\\\\\\\\
function preAgendaInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/agenda/AgendaInsert.php',postAgendaInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postAgendaInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Agenda registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preAgendaList(container){
     //Solicite información del servidor
     cargaContenido(container,'AgendaList.html'); 
 	enviar("",'../back/outerController/agenda/AgendaList.php',postAgendaList); 
}

 function postAgendaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("AgendaList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CACAOTERO \\\\\\\\\\
function preCacaoteroInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cacaotero/CacaoteroInsert.php',postCacaoteroInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCacaoteroInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Cacaotero registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCacaoteroList(container){
     //Solicite información del servidor
     cargaContenido(container,'CacaoteroList.html'); 
 	enviar("",'../back/outerController/cacaotero/CacaoteroList.php',postCacaoteroList); 
}

 function postCacaoteroList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CacaoteroList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CACAOTERO_HAS_CULTIVO \\\\\\\\\\
function preCacaotero_has_cultivoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cacaotero_has_cultivo/Cacaotero_has_cultivoInsert.php',postCacaotero_has_cultivoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCacaotero_has_cultivoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Cacaotero_has_cultivo registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCacaotero_has_cultivoList(container){
     //Solicite información del servidor
     cargaContenido(container,'Cacaotero_has_cultivoList.html'); 
 	enviar("",'../back/outerController/cacaotero_has_cultivo/Cacaotero_has_cultivoList.php',postCacaotero_has_cultivoList); 
}

 function postCacaotero_has_cultivoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Cacaotero_has_cultivoList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// COSECHA \\\\\\\\\\
function preCosechaInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cosecha/CosechaInsert.php',postCosechaInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCosechaInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Cosecha registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCosechaList(container){
     //Solicite información del servidor
     cargaContenido(container,'CosechaList.html'); 
 	enviar("",'../back/outerController/cosecha/CosechaList.php',postCosechaList); 
}

 function postCosechaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CosechaList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// COSECHA_HAS_CACAOTERO \\\\\\\\\\
function preCosecha_has_cacaoteroInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cosecha_has_cacaotero/Cosecha_has_cacaoteroInsert.php',postCosecha_has_cacaoteroInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCosecha_has_cacaoteroInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Cosecha_has_cacaotero registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCosecha_has_cacaoteroList(container){
     //Solicite información del servidor
     cargaContenido(container,'Cosecha_has_cacaoteroList.html'); 
 	enviar("",'../back/outerController/cosecha_has_cacaotero/Cosecha_has_cacaoteroList.php',postCosecha_has_cacaoteroList); 
}

 function postCosecha_has_cacaoteroList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("Cosecha_has_cacaoteroList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// CULTIVO \\\\\\\\\\
function preCultivoInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/cultivo/CultivoInsert.php',postCultivoInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postCultivoInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Cultivo registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preCultivoList(container){
     //Solicite información del servidor
     cargaContenido(container,'CultivoList.html'); 
 	enviar("",'../back/outerController/cultivo/CultivoList.php',postCultivoList); 
}

 function postCultivoList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("CultivoList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// FERTILIZACION \\\\\\\\\\
function preFertilizacionInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/fertilizacion/FertilizacionInsert.php',postFertilizacionInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postFertilizacionInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Fertilizacion registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preFertilizacionList(container){
     //Solicite información del servidor
     cargaContenido(container,'FertilizacionList.html'); 
 	enviar("",'../back/outerController/fertilizacion/FertilizacionList.php',postFertilizacionList); 
}

 function postFertilizacionList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("FertilizacionList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// FERTILIZANTE \\\\\\\\\\
function preFertilizanteInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/fertilizante/FertilizanteInsert.php',postFertilizanteInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postFertilizanteInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Fertilizante registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preFertilizanteList(container){
     //Solicite información del servidor
     cargaContenido(container,'FertilizanteList.html'); 
 	enviar("",'../back/outerController/fertilizante/FertilizanteList.php',postFertilizanteList); 
}

 function postFertilizanteList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("FertilizanteList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// FINCA \\\\\\\\\\
function preFincaInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/finca/FincaInsert.php',postFincaInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postFincaInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Finca registrado con éxito");
            window.location.href ="login2.html";
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preFincaList(container){
     //Solicite información del servidor
     cargaContenido(container,'FincaList.html'); 
 	enviar("",'../back/outerController/finca/FincaList.php',postFincaList); 
}

 function postFincaList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("FincaList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// INGREDIENTE \\\\\\\\\\
function preIngredienteInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/ingrediente/IngredienteInsert.php',postIngredienteInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postIngredienteInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Ingrediente registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preIngredienteList(container){
     //Solicite información del servidor
     cargaContenido(container,'IngredienteList.html'); 
 	enviar("",'../back/outerController/ingrediente/IngredienteList.php',postIngredienteList); 
}

 function postIngredienteList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("IngredienteList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// INGREDIENTEFERTILIZANTE \\\\\\\\\\
function preIngredientefertilizanteInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/ingredientefertilizante/IngredientefertilizanteInsert.php',postIngredientefertilizanteInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postIngredientefertilizanteInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Ingredientefertilizante registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preIngredientefertilizanteList(container){
     //Solicite información del servidor
     cargaContenido(container,'IngredientefertilizanteList.html'); 
 	enviar("",'../back/outerController/ingredientefertilizante/IngredientefertilizanteList.php',postIngredientefertilizanteList); 
}

 function postIngredientefertilizanteList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("IngredientefertilizanteList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// SECTOR \\\\\\\\\\
function preSectorInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/sector/SectorInsert.php',postSectorInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postSectorInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Sector registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preSectorList(container){
     //Solicite información del servidor
     cargaContenido(container,'SectorList.html'); 
 	enviar("",'../back/outerController/sector/SectorList.php',postSectorList); 
}

 function postSectorList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("SectorList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// SUELO \\\\\\\\\\
function preSueloInsert(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/suelo/SueloInsert.php',postSueloInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postSueloInsert(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Suelo registrado con éxito");
                     }else{
                        alert("Hubo un errror en la inserción ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preSueloList(container){
     //Solicite información del servidor
     cargaContenido(container,'SueloList.html'); 
 	enviar("",'../back/outerController/suelo/SueloList.php',postSueloList); 
}

 function postSueloList(result,state){
     //Maneje aquí la respuesta del servidor.
     if(state=="success"){
        document.getElementById("SueloList").innerHTML=result;
     }else{
 		alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That´s all folks!