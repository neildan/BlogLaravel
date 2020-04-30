@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-errors')

<form action="{{ route('post.update', $post->id) }}" method="POST">

    @method('PUT')

    @include('dashboard.post._form')

</form>

<form class="mt-2 mb-2" action="{{ route('post.image', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <input class="form-control" type="file" name="image">
        </div>
        <div class="col">
            <input type="submit" class="btn btn-primary" value="subir">
        </div>
    </div>
</form>

@endsection

