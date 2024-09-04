@extends('adminlte::page')
@section('title','Directorio revistas')
@section('content_header')
    <meta name="_token" content="{{ csrf_token() }}">
    <h1 class="m-0 text-dark">Directorio revistas</h1>
@stop
@section('content')
    <div class="container">
        <!-- @include('revistas.partials.revista-modal') -->
        @include('revistas.partials.revista-modal2')
        <table 
            id="tbl-revistas" 
            class="table table-striped table-hover table-responsive"
            data-toolbar="#toolbar"
            data-toggle="table" 
            data-show-columns="true" 
            data-url="{{route('rev_tabla')}}" 
            data-side-pagination="server" 
            data-pagination="true" 
            data-page-list="[10, 20, 50,  100, 'All']" 
            data-page-size-options='["10", "20", "50", "100", "Todos"]' 
            data-custom-all-text="Todos"
            data-page-size="10" 
            data-show-export="true" 
            data-export-data-type="all" 
            data-export-types="['csv', 'json', 'excel']" 
            data-show-fullscreen="true" 
            data-show-search-clear-button="true" 
            data-show-print="true" 
            data-locale="es-VE"
            data-search="true"
            data-search-accent-neutralise="true"
            data-show-refresh="true"            
        >
            <thead>
                <tr>
                    <th data-field="actions" data-formatter="actionFormatter" data-events="actionEvents">ACCIONES</th>
                <!-- <th data-field="actions" data-formatter="actionFormatter" >ACCIONES</th> -->
                    <th data-field="id" data-sortable=true>ID</th>
                    <th data-field="portada" data-formatter="imageFormatter">PORTADA</th>
                    <th data-field="revista" data-sortable=true>REVISTA</th>
                    <th data-field="area_conocimiento" data-sortable="true">ÁREAS<br/>CONOCIMIENTO</th>
                    <th data-field="editorial" data-sortable="true">EDITORIAL</th>
                    <th data-field="indice" data-sortable="true">ÍNDICE</th>
                    <th data-field="idioma" data-sortable="true">IDIOMA</th>
                    <th data-field="periodicidad" data-sortable="true">PERIODICIDAD</th>
                    <th data-field="formato" data-sortable="true">FORMATO</th>
                    <th data-field="deposito_legal_impreso" data-sortable="true">DEPÓSITO<br/>LEGAL IMPRESO</th>
                    <th data-field="deposito_legal_digital" data-sortable="true">DEPÓSITO<br/>LEGAL DIGITAL</th>
                    <th data-field="issn_impreso" data-sortable="true">ISSN<br/>IMPRESO</th>
                    <th data-field="issn_digital" data-sortable="true">ISSN<br/>DIGITAL</th>
                    <th data-field="url" data-sortable="true">URL</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@stop

@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('css')
@stop

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {

    });


    
</script>
@stop
