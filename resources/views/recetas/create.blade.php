@extends('layouts.app')

@section('botones')
    <a class="btn btn-primary mr-2">Crear receta</a>
@endsection

@section('content')
    <h2 class="text-center mb-3">Crear nueva receta</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('recetas.store') }}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">Título Receta</label>
                    <input
                        class="form-control"
                        id="titulo"
                        type="text"
                        name="titulo"
                        placeholder="Título receta"
                        @error('titulo')
                            is-invalid
                        @enderror
                        required
                        value="{{ old('titulo') }}"
                    >
                    @error('titulo')
                        <span class="text-danger" role="alert-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar receta">
                </div>
            </form>
        </div>
    </div>

@endsection



