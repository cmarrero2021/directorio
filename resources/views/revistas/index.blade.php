@extends('adminlte::page')
@section('title','Directorio revistas')
@section('content_header')
    <meta name="_token" content="{{ csrf_token() }}">
    <h1 class="m-0 text-dark">Directorio revistas</h1>
@stop
@section('content')
    <div class="container">
        <table id="revistas" class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PORTADA</th>
                    <th>REVISTA</th>
                    <th>ÁREAS<br/>CONOCIMIENTO</th>
                    <th>EDITORIAL</th>
                    <th>ÍNDICE</th>
                    <th>IDIOMA</th>
                    <th>PERIDIOCIDAD</th>
                    <th>FORMATO</th>
                    <th>DEPÓSITO<br/>LEGAL IMPRESO</th>
                    <th>DEPÓSITO<br/>LEGAL DIGITAL</th>
                    <th>ISSN<br/>IMPRESO</th>
                    <th>ISSN<br/>DIGITAL</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
                @foreach($revistas as $revista)
                    <tr>
                        <td>{{$revista['id']}}</td>
                        <td><img src="{{ asset('portadas/' . $revista['portada']) }}"  width="70" height="90"></td>
                        <td>{{$revista['revista']}}</td>
                        <td>{{$revista['area_conocimiento']}}</td>
                        <td>{{$revista['editorial']}}</td>
                        <td>{{$revista['indice']}}</td>
                        <td>{{$revista['lenguaje']}}</td>
                        <td>{{$revista['periodicidad']}}</td>
                        <td>{{$revista['formato']}}</td>
                        <td>{{$revista['deposito_legal_impreso']}}</td>
                        <td>{{$revista['deposito_legal_digital']}}</td>
                        <td>{{$revista['issn_impreso']}}</td>
                        <td>{{$revista['issn_digital']}}</td>
                        <td>{{$revista['url']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('css')
@stop
@section('js')
<<script>

    document.addEventListener('DOMContentLoaded', function() {

    });	


</script>
@stop