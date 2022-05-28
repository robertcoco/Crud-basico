<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
    display:flex;
    align-items: center;
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

            Nombre <input class="form-control" type="text" name="nombreCompleto" placeholder="Nombre"><br>
            Matricula <input class="form-control" type="text" name="matricula" placeholder="matricula"><br>
            Foto <input  type="file" name="foto"><br><br>
            Carrera<input class="form-control" type="text" name="carrera" placeholder="carrera"><br>
            <input class="btn btn-success" type="submit" value="Enviar">
            
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