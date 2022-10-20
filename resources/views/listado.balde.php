<h1>Listado de alumnos</h1>

<table width="100" border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>DNI</th>
        </tr>
        @foreach ($alumnos as $alumnos)
        <tr>
            <td>{{$alumnos->nombre}}</td>
            <td>{{$alumnos->edad}}</td>
            <td>{{$alumnos->dni}}</td>
            <td>{{$alumnos->estado}}</td>
           
        </tr>
        @endforeach
</table>        