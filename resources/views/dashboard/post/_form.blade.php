@csrf

<div class="form-group">
    <label for="title">Titulo</label>
<input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>

<div class="form-group">
    <label for="url_clean">Url Limpia</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
</div>

<div class="form-group">
    <label for="category_id">Categoría</label>
    <select class="form-control" name="category_id" id="category_id">
        @forelse($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $title }}</option>
        @empty
            <option value="0" disabled>No hay categorías</option>
        @endforelse
    </select>
</div>

<div class="form-group">
    <label for="posted">Posted</label>
    <select class="form-control" name="posted" id="posted">
        @include('dashboard.partials.select-yes-not',['val' => $post->posted])
    </select>
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
</div>

<input type="submit" value="Enviar" class="btn btn-primary">