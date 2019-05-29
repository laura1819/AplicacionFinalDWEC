function validarEmail(){
	// vamos hacer la funcion para validar el email
	// declaramos una variable para coger del formulario su valor:
		var email=document.getElementById('email').value;
		// declaramos dos variables para los que no se pueden!
		var hotmail=email.search('hotmail');
		var yahoo=email.search('yahoo');
		// por ulttimo la validacion de los correos
		// y mensajes de error!
		if(hotmail!=-1 || yahoo!=-1){
			document.getElementById('error').innerHTML="ni hotmail ni yahoo!!!!!!!!!!!";
			document.getElementById('email').value="";
		}else{
			document.getElementById('error').innerHTML="";
		}
	}