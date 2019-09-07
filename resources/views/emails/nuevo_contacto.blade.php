<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Correo</title>
</head>
<body>
	<h3>Solicitud de información de recargas.</h3>
	<strong>Nombre: </strong>{{$datos->nombres}} {{$datos->apellidos}}<br>
	<strong>Correo: </strong>{{$datos->correo}}<br>
	<strong>Telefono: </strong>{{$datos->telefono}}<br>
	<strong>Fecha: </strong>{{$datos->fecha}}<br>
	</p>

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