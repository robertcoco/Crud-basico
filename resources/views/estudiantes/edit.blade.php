@extends('layouts.app')
@section('content')
<div class="container">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="{{ url('/estudiantes/'.$estudiante->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
            <div class="card">
            <div class="card-body">
            @include ('estudiantes.form',["modo"=>"editar"])
            </div>
        </div>
            </div>
            <div class="col-md-3">
                
            </div>
            
        </div>
    </div>
    
    
</form>
    
</body>
</html>
</div>
@endsection