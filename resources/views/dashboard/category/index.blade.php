@extends('dashboard.master')

@section('content')
<h1>Categorías</h1>

<a class="btn btn-primary mb-2" href="{{ route('category.create') }}">
    Crear nueva categoría
</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Url Limpia</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>
                {{ $category->id }}
            </td>
            <td>
                {{ $category->title }}
            </td>
            <td>
                {{ $category->url_clean }}
            </td>
            <td>
                {{ $category->created_at->format('d-M-Y') }}
            </td>
            <td>
                {{ $category->updated_at->format('d-M-Y') }}
            </td>
            <td>
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-success">Ver</a>

                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-primary">Actualizar</a>

                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#borrarcategory" data-id="{{ $category->id }}">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}

<div class="modal fade" id="borrarcategory" tabindex="-1" role="dialog" aria-labelledby="borrarcategoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="borrarcategoryLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro que quiere eliminar esta categoría?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <form id="form-delete" action="{{ route('category.destroy', 0) }}" data-action="{{ route('category.destroy', 0) }}" method="POST">
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
        $('#borrarcategory').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-title').text('Eliminar categoría: ' + id)

            var action = $('#form-delete').attr('data-action').slice(0, -1)
            action += id
            $('#form-delete').attr('action', action)
        })
    }
</script>
@endsection