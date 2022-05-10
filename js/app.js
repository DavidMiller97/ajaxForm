
$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function() {
                	 $.post("insertar.php",
                	 {
                        	nombre: $('#nombre').val(),
				apaterno: $('#apaterno').val(),
				amaterno: $('#amaterno').val(),
				pass: $('#pass').val()
               		 },
               		 function(data, status){
        	                alert("Datos: " + data + " Status: " + status);
				$('#formulario').trigger('reset');
	                });
        	},
		rules: {
			nombre: {
				required: true,
				minlength: 3,
				maxlength: 20
			},
			apaterno: {
				required: true,
				minlength: 3,
				maxlength: 20
			},
			amaterno: {
				required: true,
				minlength: 3,
				maxlength: 20
			},
			pass: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			passrepeated: {
				required: true,
				minlength: 8,
				maxlength: 15,
				equalTo: "#pass"
			}
		},
		messages: {
			name: {
				required: "El nombre es requerido",
				minlength: "El nombre debe ser de al menos 3 caracteres",
				maxlength: "El nombre debe tener menos de 20 caracteres"
			},
			apaterno: {
				equired: "El apellido paterno es requerido",
                                minlength: "El apellido paterno debe ser de al menos 3 caracteres",
                                maxlength: "El apellido paterno  debe tener menos de 20 caracteres"
			},
			amaterno: {
				equired: "El apellido materno es requerido",
                                minlength: "El apellido materno debe ser de al menos 3 caracteres",
                                maxlength: "El apellido materno debe tener menos de 20 caracteres"
			},
			pass: {
				equired: "La contraseña es requerida",
                                minlength: "La contraseña debe ser de al menos 8 caracteres",
                                maxlength: "La contraseña debe tener menos de 15 caracteres"
			},
			passrepeated: {
				equired: "La contraseña es requerida",
                                minlength: "La contraseña debe ser de al menos 8 caracteres",
                                maxlength: "La contraseña debe tener menos de 15 caracteres",
				equalTo: "Las contraseñas deben de coincidir"
			}

		}
	});



});
