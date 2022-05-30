@extends('layouts.app')
@section('content')

<div class="container">
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<a class="btn btn-success" href="{{ url('estudiantes/create') }}">Crear nuevo estudiante</a>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaginaPrincipal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark">
    <thead class="table table-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>matricula</th>
            <th>foto</th>
            <th>carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td> {{ $estudiante->id}} </td>
            <td> {{ $estudiante->nombreCompleto}} </td>
            <td> {{ $estudiante->matricula}} </td>
            <td><img class="img-thumbnail img-fluid" height="100" width="100"  src="{{ asset('storage').'/'.$estudiante->foto }}" alt=""></td>
            <td>{{ $estudiante->carrera }}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/estudiantes/'.$estudiante->id.'/edit')}}">editar</a>
            |
                <form action="{{url('/estudiantes/'.$estudiante->id)}}" class="d-inline" method="post">
                @csrf 
                {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" value="borrar" onclick="return confirm('deseas borrar?');">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>    
</body>
</html>
</div>
@endsection