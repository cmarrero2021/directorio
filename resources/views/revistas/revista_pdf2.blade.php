<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revista PDF</title>
</head>
<body>
    <h1>Datos de la Revista</h1>
    <p><strong>Revista:</strong> {{ $revista->titulo }}</p>
    <p><strong>URL:</strong> {{ $revista->url }}</p>
    <p><strong>Año:</strong> {{ $revista->anio_inicial }}</p>
    <p><strong>Depósito Legal Impreso:</strong> {{ $revista->deposito_legal_impreso }}</p>
    <p><strong>Depósito Legal Digital:</strong> {{ $revista->deposito_legal_digital }}</p>
    <p><strong>ISSN Impreso:</strong> {{ $revista->issn_impreso }}</p>
    <p><strong>ISSN Digital:</strong> {{ $revista->issn_digital }}</p>
    <p><strong>Índice:</strong> {{ $revista->indice }}</p>
    <p><strong>Área de Conocimiento:</strong> {{ $revista->area_conocimiento }}</p>
    <p><strong>Idioma:</strong> {{ $revista->idioma }}</p>
    <p><strong>Periodicidad:</strong> {{ $revista->periodicidad }}</p>
    <p><strong>Formato:</strong> {{ $revista->formato }}</p>
    <p><strong>Correo Revista:</strong> {{ $revista->correo_revista }}</p>
    <p><strong>Editorial:</strong> {{ $revista->editorial }}</p>
    <p><strong>Correo Editorial:</strong> {{ $revista->correo_editor }}</p>
</body>
</html>
