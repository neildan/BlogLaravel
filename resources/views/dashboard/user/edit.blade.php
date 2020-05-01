@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-errors')

<form action="{{ route('user.update', $user->id) }}" method="POST">

    @method('PUT')

    @include('dashboard.user._form',['pwd' => false])

</form>

@endsection

