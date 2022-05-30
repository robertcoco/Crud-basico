
<label for="nombreCompleto">Nombre</label>
<input class="form-control" type="text" value="{{ isset($estudiante->nombreCompleto)?$estudiante->nombreCompleto:'' }}" name="nombreCompleto" placeholder="Nombre"><br>
<label for="matricula">Matricula</label>
<input class="form-control" type="text" value="{{ isset($estudiante->matricula)?$estudiante->matricula:'' }}" name="matricula" placeholder="matricula"><br>
<label for="foto">Foto</label>
@if(isset($estudiante->foto))
<img class="img-thumbnail img-fluid" height="100" width="100"  src="{{ asset('storage').'/'.$estudiante->foto }}" alt="">
@endif
<input  type="file" name="foto"><br><br>
<label for="carrera">Carrera</label>
<input class="form-control" type="text" value="{{ isset($estudiante->carrera)?$estudiante->carrera:'' }}" name="carrera" placeholder="carrera"><br>
<input class="btn btn-success" type="submit" value="{{$modo}} datos">
<a class="btn btn-primary" href="{{ url('estudiantes/') }}">Regresar</a>