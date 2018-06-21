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

function preConsultaFertilizante(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/fertilizante/FertilizanteConsulta.php',postConsultaFertilizante);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postConsultaFertilizante(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){           
 			document.getElementById("exampleTextarea").value = result;
        }else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preConsultaSuelo(idForm){
     //Haga aquí las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData,'../back/outerController/suelo/SueloConsulta.php',postConsultaSuelo);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postConsultaSuelo(result,state){
     //Maneje aquí la respuesta del servidor.
     //Consideramos buena práctica no manejar código HTML antes de este punto.
 		if(state=="success"){           
 			document.getElementById("infoSuelo").value = result;
        }else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}