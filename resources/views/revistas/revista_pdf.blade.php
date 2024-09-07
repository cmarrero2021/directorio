<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ficha revista {{ $revista->revista }}</title>
	<style>
		@font-face {
			font-family: 'Roboto';
			src: url('{{ asset('assets/fonts/roboto/Roboto-Regular.ttf') }}') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		body {
			font-family: 'Roboto', sans-serif;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="{{ url('vendor/adminlte/dist/img/oncti2.png') }}" alt="LogoS ONCTI">
		

		

		@php
			$clase = "background-color:#c6ccc8";
		@endphp
		<table width="100%">
			<tr>
				<td colspan="2">
					<h1 class="text-center">Revista: {{ $revista->revista }}</h1>
				</td>
			</tr>
			<tr style="{{$clase}}">
				<td><strong>URL:</strong></td>
				<td> <span id="#url">{{$revista->url}}</td>
			</tr>
			<tr>
				<td><strong>Año:</strong></td>
				<td> <span id="#anio_inicial">{{$revista->anio_inicial}}</td>
			</tr>
			<tr>
				<td style="background-color:#c6ccc8 !important;"><strong>Depósito Legal Impreso:</strong></td>
				<td> <span id="#deposito_legal_impreso">{{$revista->deposito_legal_impreso}}</td>
			</tr>
			<tr>
				<td><strong>Depósito Legal Digital:</strong></td>
				<td> <span id="#deposito_legal_digital">{{$revista->deposito_legal_digital}}</td>
			</tr>
			<tr style="background-color:#c6ccc8 !important;">
				<td><strong>ISSN Impreso:</strong></td>
				<td> <span id="#issn_impreso">{{$revista->issn_impreso}}</td>
			</tr>
			<tr>
				<td><strong>ISSN Digital:</strong></td>
				<td> <span id="#issn_digital">{{$revista->issn_digital}}</td>
			</tr>
			<tr style="background-color:#c6ccc8 !important;">
				<td><strong>Índice:</strong></td>
				<td> <span id="#indice">{{$revista->indice}}</td>
			</tr>
			<tr>
				<td><strong>Área de Conocimiento:</strong></td>
				<td> <span id="#area_conocimiento">{{$revista->area_conocimiento}}</td>
			</tr>
			<tr style="background-color:#c6ccc8 !important;">
				<td><strong>Idioma:</strong></td>
				<td> <span id="#idioma">{{$revista->idioma}}</td>
			</tr>
			<tr>
				<td><strong>Periodicidad:</strong></td>
				<td> <span id="#periodicidad">{{$revista->periodicidad}}</td>
			</tr>
			<tr style="background-color:#c6ccc8 !important;">
				<td><strong>Formato:</strong></td>
				<td> <span id="#formato">{{$revista->formato}}</td>
			</tr>
			<tr>
				<td><strong>Correo Revista:</strong></td>
				<td> <span id="#correo_revista">{{$revista->correo_revista}}</td>
			</tr>
			<tr style="background-color:#c6ccc8 !important;">
				<td><strong>Editorial:</strong></td>
				<td> <span id="#editorial">{{$revista->editorial}}</td>
			</tr>
			<tr>
				<td><strong>Correo Editorial:</strong></td>
				<td> <span id="#correo_editor">{{$revista->correo_editor}}</td>
			</tr>
		</table>
	</div>
</body>

</html>