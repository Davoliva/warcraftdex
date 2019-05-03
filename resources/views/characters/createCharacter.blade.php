@extends('layouts.app')
{{-- titulo --}}
@section('title', 'Crear personaje')
{{-- cuerpo --}}
@section('content')
    <form class="form-group" method="POST" action="/characters">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
