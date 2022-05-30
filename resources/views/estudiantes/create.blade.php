@section('content')
@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    body {
    
    background-color:#0D0C1D; 
}
    .container{
        
        align-items: center;
        color:#F1DAC4;
        font-family: Helvetica;
    }
    .card{
        display:flex;
    align-items: stretch;
        background-color: #161B33;
    }
    .card-header{
        background-color: #474973;
    }
    
    
</style>
</head>


<body>
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Registro de datos
            </div>
            <div class="card-body">
            <form action="{{url('estudiantes')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include ('estudiantes.form',["modo"=>"crear"])
            
        </form>  
            </div>
        </div>            
    </div>
    
        <div class="col-md-3">
        </div>
        
    </div>
</div>

</body>
</html>
</div>
@endsection