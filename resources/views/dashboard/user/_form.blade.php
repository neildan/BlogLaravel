@csrf

<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
</div>

<div class="form-group">
    <label for="surname">Apellido</label>
    <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">
</div>

<div class="form-group">
    <label for="email">Correo</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" autocomplete="email">
</div>

<div class="form-group">
    <label for="rol_id">Roles</label>
    <select class="form-control" name="rol_id" id="rol_id">
        @forelse($rols as $key => $id)
        <option {{ $user->rol_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $key }}</option>
        @empty
        <option value="0" disabled>No hay roles</option>
        @endforelse
    </select>
</div>

@if($pwd)
<div class="form-group">
    <label for="password">Contraseña</label>
    <input class="form-control" type="password" name="password" id="password" autocomplete="new-password" value="{{ old('password') }}">
</div>

<div class="form-group">
    <label for="password_confirmation">Confirmar Contraseña</label>
    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" value="{{ old('password_confirmation') }}">
</div>
@endif

<input type="submit" value="Enviar" class="btn btn-primary">