<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Correo</title>
</head>
<body>
	<h3>Solicitud de registro de recargas.</h3>
	<strong>Identificacion: </strong>{{$datos->identificacion}}<br>
	<strong>Nombre: </strong>{{$datos->nombres}}<br>
	<strong>Correo: </strong>{{$datos->correo}}<br>
	<strong>Telefono: </strong>{{$datos->telefono}}<br>
	<strong>Ciudad: </strong>{{$datos->ciudad}}<br>
	<strong>Direccion: </strong>{{$datos->direccion}}<br>
	<strong>Nombre del negocio: </strong>{{$datos->negocio}}<br>
	<strong>Fecha: </strong>{{$datos->created_at}}<br>

	<p>
		<center>
			<a class="boton" href="https://api.whatsapp.com/send?phone=57{{$datos->telefono}}&text=Hola%20te%20saludamos%20de%20servirecarga.com">
				<strong>
					Contactar WP
				</strong>
			</a>
		</center>
	</p>
	
</body>
</html>