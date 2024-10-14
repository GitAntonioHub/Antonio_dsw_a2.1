<!DOCTYPE html>
<html>
<head>
    <title>Enviar Duda</title>
</head>
<body>
    <h1>Enviar Duda</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('duda.store') }}" method="POST">
        @csrf
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required>
        <br>
        <label for="modulo">Módulo:</label>
        <select name="modulo" required>
            <option value="Desarrollo Web en Entorno Cliente">Desarrollo Web en Entorno Cliente</option>
            <!-- Agrega más módulos según sea necesario -->
        </select>
        <br>
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <br>
        <button type="submit">Enviar Duda</button>
    </form>
</body>
</html>
