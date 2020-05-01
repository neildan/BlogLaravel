@extends('dashboard.master')

@section('content')
<h1>Usuarios</h1>

<a class="btn btn-primary mb-2" href="{{ route('user.create') }}">
    Crear nuevo usuario
</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->surname }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->rol->key }}
            </td>
            <td>
                {{ $user->created_at->format('d-M-Y') }}
            </td>
            <td>
                {{ $user->updated_at->format('d-M-Y') }}
            </td>
            <td>
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-success">Ver</a>

                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Actualizar</a>

                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#borraruser" data-id="{{ $user->id }}">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}

<div class="modal fade" id="borraruser" tabindex="-1" role="dialog" aria-labelledby="borraruserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="borraruserLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro que quiere eliminar este usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <form id="form-delete" action="{{ route('user.destroy', 0) }}" data-action="{{ route('user.destroy', 0) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#borraruser').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-title').text('Eliminar usuario: ' + id)

            var action = $('#form-delete').attr('data-action').slice(0, -1)
            action += id
            $('#form-delete').attr('action', action)
        })
    }
</script>
@endsection