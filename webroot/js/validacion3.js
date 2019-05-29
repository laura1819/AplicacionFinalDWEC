function validarFormulario() {
			// vamos a coger los datos del formulario en primer lugar
				var todoOk=true; // creamos una variable para las validaciones
				
				var nombre = document.forms[0].elements[0].value;
			
				var apellidos = document.forms[0].elements[1].value;
				var sexo = document.forms[0].elements[2].value;
				var fecha=document.forms[0].elements[3].value;
				
				
				var hoy=new Date(); // variable para la fecha
				var fechaSplit=fecha.split('-'); // con split le damos formato
			
				
				// seguimos cogiendo los datos
				var titulacion = document.forms[0].elements[4].value;
				var curso = document.forms[0].elements[5].value;
				var anyo = document.forms[0].elements[6].value;
				// acabamos con todos los datos
			
				
            }
		