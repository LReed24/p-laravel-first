<h1>Lista de Roles</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <thbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id}}</td>
                <td>{{ $role->name}}</td>
                <td>{{ $role->description}}</td>
            </tr>
        @endforeach
    </tbody>
</table>