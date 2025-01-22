@extends('app') <!-- Asegúrate de que extienda un layout principal -->

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Agregar un Nuevo Curso</h2>
    
    <div class="card shadow p-4">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Token de seguridad -->
            
            <!-- Título del curso -->
            <div class="mb-3">
                <label for="title" class="form-label">Título del Curso</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa el título del curso" required>
            </div>

            <!-- Descripción del curso -->
            <div class="mb-3">
                <label for="description" class="form-label">Descripción del Curso</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Escribe una descripción del curso" required></textarea>
            </div>

            <!-- Imagen del curso -->
            <div class="mb-3">
                <label for="image" class="form-label">Imagen del Curso</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-secondary me-2">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Curso</button>
            </div>
        </form>
    </div>
</div>
@endsection
