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
			margin: 0;
			padding: 0;
		}

		.container {
			padding: 20px;
		}

		footer {
			position: fixed;
			bottom: 0;
			left: 0;
			right: 0;
			height: 50px;
			text-align: center;
			line-height: 35px;
			background-color: #f1f1f1;
			font-size: 12px;
		}

		@page {
			margin: 20mm;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="assets/images/logo.png" alt="Logo" width="100" height="50">
		<hr/>
		@php
			$clase = "background-color:#f1f1f1";
			//print_r($revista);
		@endphp
		<table width="100%">
			<tr>
				<td colspan="2">
					<h2 class="text-center">Revista: {{ $revista->revista }}</h2>
				</td>
			</tr>
			<tr colspan="2">
				<td><img src = "portadas/{{$revista->portada}}"></td>
				
			</tr>
			<tr style="{{$clase}}">
				<td><strong>URL:</strong></td>
				<td> <span id="#url">{{$revista->url}}</span></td>
			</tr>
			<tr>
				<td><strong>Año:</strong></td>
				<td> <span id="#anio_inicial">{{$revista->anio_inicial}}</span></td>
			</tr>
			<tr style="{{$clase}}">
				<td ><strong>Depósito Legal Impreso:</strong></td>
				<td> <span id="#deposito_legal_impreso">{{$revista->deposito_legal_impreso}}</span></td>
			</tr>
			<tr>
				<td><strong>Depósito Legal Digital:</strong></td>
				<td> <span id="#deposito_legal_digital">{{$revista->deposito_legal_digital}}</span></td>
			</tr>
			<tr  style="{{$clase}}">
				<td><strong>ISSN Impreso:</strong></td>
				<td> <span id="#issn_impreso">{{$revista->issn_impreso}}</span></td>
			</tr>
			<tr>
				<td><strong>ISSN Digital:</strong></td>
				<td> <span id="#issn_digital">{{$revista->issn_digital}}</span></td>
			</tr>
			<tr  style="{{$clase}}">
				<td><strong>Índice:</strong></td>
				<td> <span id="#indice">{{$revista->indice}}</span></td>
			</tr>
			<tr>
				<td><strong>Área de Conocimiento:</strong></td>
				<td> <span id="#area_conocimiento">{{$revista->area_conocimiento}}</span></td>
			</tr>
			<tr  style="{{$clase}}">
				<td><strong>Idioma:</strong></td>
				<td> <span id="#idioma">{{$revista->idioma}}</span></td>
			</tr>
			<tr>
				<td><strong>Periodicidad:</strong></td>
				<td> <span id="#periodicidad">{{$revista->periodicidad}}</span></td>
			</tr>
			<tr  style="{{$clase}}">
				<td><strong>Formato:</strong></td>
				<td> <span id="#formato">{{$revista->formato}}</span></td>
			</tr>
			<tr>
				<td><strong>Correo Revista:</strong></td>
				<td> <span id="#correo_revista">{{$revista->correo_revista}}</span></td>
			</tr>
			<tr  style="{{$clase}}">
				<td><strong>Editorial:</strong></td>
				<td> <span id="#editorial">{{$revista->editorial}}</span></td>
			</tr>
			<tr>
				<td><strong>Correo Editorial:</strong></td>
				<td> <span id="#correo_editor">{{$revista->correo_editor}}</span></td>
			</tr>
			<tr>
				<td colspan="2"> 
				<strong>Resúmen:</strong><br/>
				<textarea  style="width: 100%; !important;">{{$revista->resumen}}</textarea>
				</td>
			</tr>
		</table>
	</div>

	<!-- Footer -->
	<footer>
		<span>Generado el {{ now()->format('d-m-Y H:i') }} | Directorio Revistas ONCTI</span>
	</footer>
</body>

</html>
