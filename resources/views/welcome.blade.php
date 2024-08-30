<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ONCTI - Directorio de revistas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">        

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
        <style>
            .gothic-a1-regular {
                font-family: "Gothic A1", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
        </style>
    </head>
    <body class="antialiased gothic-a1-regular">
        <div class="bg-dark">
        <img src="{{ asset('vendor/adminlte/dist/img/cintillo_gobierno.png') }}" class="img-fluid w-100" alt="Cintillo Gobierno">
        </div>
        <nav class="navbar navbar-expand-sm navbar-light bg-turqueoise">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">ONCTI - DIRECTORIO DE REVISTAS</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto d-flex justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Revistas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link active text-white" aria-current="page" href="#">Ingresar</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 mt-5">
                <img src="{{ asset('vendor/adminlte/dist/img/logo_revista.png') }}" class="img-fluid w-100 mt-2" alt="Logo Revista">
            </div>
            <div class="col-sm-12 col-md-8 mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan purus et placerat commodo. Nunc bibendum nulla sed ligula suscipit, quis vulputate nisl feugiat. Nam ac libero quis arcu placerat auctor. Sed cursus aliquet mauris a tincidunt. Mauris vehicula nisi ante, eget hendrerit metus aliquam a. Donec euismod sapien et fringilla eleifend. Sed aliquam, sem ut auctor elementum, mauris tellus fringilla neque, ut congue lectus dolor id est. Donec sed consectetur eros. Suspendisse dictum felis magna. Duis fringilla tincidunt dolor quis ornare. Suspendisse in massa ac nulla lobortis faucibus. Pellentesque gravida nibh a lacus congue, imperdiet porta purus scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row">
            <p>Aenean et gravida felis. Suspendisse vestibulum, ante ullamcorper facilisis congue, tellus turpis auctor justo, suscipit luctus sem elit et tortor. Aliquam convallis accumsan odio eget vehicula. Fusce lectus quam, maximus a commodo in, bibendum at tortor. Nulla ultricies at lacus et pulvinar. Aenean rhoncus nibh libero, id porta orci pharetra a. Morbi accumsan fringilla ligula, et condimentum turpis accumsan in. Fusce placerat dolor ac nulla tincidunt, ut mattis ex euismod. Nunc et nisl eget mauris congue finibus. </p>
        </div>
    </div>

    </body>
</html>
