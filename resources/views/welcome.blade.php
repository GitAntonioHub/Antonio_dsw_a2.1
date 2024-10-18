<!DOCTYPE html>
<html>
<head>
    <title>Enviar Duda</title>
</head>
<body>
    <h1>Enviar Duda</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('duda.store') }}" method="POST">
        @csrf
    
        <label for="correo">Correo electrónico:</label>
        <input type="text" id="correo" name="correo" value="{{ old('correo') }}" required>
        @error('correo')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="modulo">Módulo:</label>
        <select id="modulo" name="modulo" required>
            <option value="">Selecciona un módulo</option>
            @foreach ($modulos as $modulo)
                <option value="{{ $modulo }}">{{ $modulo }}</option>
            @endforeach
        </select>
        @error('modulo')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required>
        @error('asunto')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required>{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <p>{{ $message }}</p>
        @enderror
    
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>