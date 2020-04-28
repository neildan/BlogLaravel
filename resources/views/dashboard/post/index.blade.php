@extends('dashboard.master')

@section('content')
    <h1>Post</h1>

    <a class="btn btn-primary mb-2" href="{{ route('post.create') }}">
        Crear nuevo post
    </a>

    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Url Limpia</td>
                <td>Posted</td>
                <td>Creado</td>
                <td>Actualizado</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>
                    {{ $post->id }}
                </td>
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    {{ $post->url_clean }}
                </td>
                <td>
                    {{ ($post->posted == 'yes') ? 'Si' : 'No' }}
                </td>
                <td>
                    {{ $post->created_at->format('d-M-Y') }}
                </td>
                <td>
                    {{ $post->updated_at->format('d-M-Y') }}
                </td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-primary">Ver</a>

                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">Actualizar</a>

                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">

                        @method('DELETE')
                        @csrf

                        <button class="btn btn-sm btn-danger">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection