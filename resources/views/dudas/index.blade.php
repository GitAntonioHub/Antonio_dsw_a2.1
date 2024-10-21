<!-- resources/views/dudas/index.blade.php -->
<h1>Listado de Dudas</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Módulo</th>
            <th>Asunto</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dudas as $duda)
            <tr>
                <td>{{ $duda->id }}</td>
                <td>{{ $duda->modulo }}</td>
                <td>{{ $duda->asunto }}</td>
                <td>{{ $duda->descripcion }}</td>
                <td>
                    <!-- Formulario para eliminar la duda -->
                    <form action="{{ route('dudas.destroy', $duda->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar esta duda?');">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>