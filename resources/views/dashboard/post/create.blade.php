@extends('dashboard.master')

@section('content')
    <div class="container mt-2">

        @include('dashboard.partials.validation-errors')

        <form action='{{ route("post.store") }}' method="POST">

            @csrf

            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="url_clean">Url Limpia</label>
                <input class="form-control" type="text" name="url_clean" id="url_clean">
            </div>

            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
@endsection

