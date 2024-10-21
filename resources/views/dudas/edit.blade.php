<!-- resources/views/dudas/edit.blade.php -->
<h1>Editar Duda</h1>

<form action="{{ route('dudas.update', $duda->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="modulo">Módulo:</label>
    <input type="text" id="modulo" name="modulo" value="{{ old('modulo', $duda->modulo) }}" required>

    <label for="asunto">Asunto:</label>
    <input type="text" id="asunto" name="asunto" value="{{ old('asunto', $duda->asunto) }}" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required>{{ old('descripcion', $duda->descripcion) }}</textarea>

    <button type="submit">Actualizar Duda</button>
</form>
