<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>matricula</th>
            <th>foto</th>
            <th>carrera</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td> {{ $estudiante->id}} </td>
            <td> {{ $estudiante->nombreCompleto}} </td>
            <td> {{ $estudiante->matricula}} </td>
            <td> {{ $estudiante->foto}} </td>
            <td>{{ $estudiante->carrera }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
