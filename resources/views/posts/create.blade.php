@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Artículo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-date">
                        <div class="form-group">
                            <label>Título *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>    
                        </div>
                        <div class="form-group">
                            <label>Contenido embebido</label>
                            <textarea name="iframe" class="form-control"></textarea>    
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Envíar" class="btn btn-primary float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
