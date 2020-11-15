@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Publicacion</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('post.index') }}"> Regresar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo:</strong>
            {{ $post->title }}
        </div>
        <div class="form-group">
            <strong>Publicaicon:</strong>
            {{ $post->body }}
        </div>
    </div>
</div>
@endsection