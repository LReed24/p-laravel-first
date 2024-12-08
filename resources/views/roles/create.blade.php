<!-- PAgina simple forulario para ingresar los datos del nuevo rol (name y description) -->
<h1>Crear nuevo ROL</h1>
<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name">
    <label for="description">Descripcion:</label>
    <input type="text" name="description" id="description">
    <button type="submit">Guardar</button>
</form>