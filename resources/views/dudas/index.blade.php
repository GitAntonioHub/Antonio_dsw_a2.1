<h1>Listado de Dudas</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Módulo</th>
            <th>Asunto</th>
            <th>Descripción</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dudas as $duda)
            <tr>
                <td>{{ $duda->id }}</td>
                <td>{{ $duda->modulo }}</td>
                <td>{{ $duda->asunto }}</td>
                <td>{{ $duda->descripcion }}</td>
                <td>{{ $duda->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
