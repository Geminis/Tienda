/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
alert("crearFormulario");
var serviceURL = "http://localhost/TiendaNet/php/";
var pagina;
$(document).ready(inicializar);


function inicializar()
{
    alert("seccionpricipal");
    seccionpricipal();
    
}

function seccionpricipal()
{
    alert("crearFormulario");
    var codigoHTML ='<form id="form_login">'+
                                '<table cellspacing="5">'+
                                    '<tr>'+
                                        '<td colspan="5" align="center"><h2>Log In</h2></td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<th align="leght"><p></p></th>'+
                                        '<td><input type="text" class="login"  name="usuario" title="" placeholder="Usuario" value="" autocomplete="off" id="usuariologin" size="12" maxlength="100 required="required" /></td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<th align="leght"><p></p></th>'+
                                        '<td><input type="password" name="password" class="login" placeholder="Contraseña" value="" id="contrasenalogin" size="12" maxlength="100 required="required" /></td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td colspan="2">'+
                                        '<input type="submit" class="botonIngresarLoguin" id="Ingresar" value="Ingresar" />'+
                                        '</td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td colspan="2" align="center">&nbsp;</td>'+
                                    '</tr>'+
                                '</table>'+
                        '</form>';

        $(".section2").html(codigoHTML); 
        $("#form_login").submit(AutenticarUsuario);
    
}

function AutenticarUsuario(evento)
{
	evento.preventDefault();

	var usuario = $('#usuariologin').val();
	var password = $('#contrasenalogin').val();

	var datosuser = $(this).serialize();

	$.ajax({
			data: datosuser,
			type: 'POST',
			dataType: 'json',
			url: 'http://localhost/TiendaNet/php/Login_usuario.php',
			success: function(data)
			{					
				var datos = data.items;
				$.each(datos, function(index, dato) 
				{
					
					if (dato.cedula == usuario && dato.contrasena == password)
					{			
						var v = hex_md5(usuario);
						sessionStorage.setItem("ced", v);
						location.href="Tienda.php";	
						alert("¡Felicidades¡ Se ha Logueado correctamente");										
					}
				});

				if(data.items == 0)
				{
					alert("Usuario y/o Contraseña Incorrectos");
				}					

			},
			error: function() 
			{
				alert("Error al conectar con el Server");
			}
		});			
}