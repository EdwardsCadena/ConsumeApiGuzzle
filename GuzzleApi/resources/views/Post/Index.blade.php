@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Publicaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Crear nueva publicacion.</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if(sizeof($posts) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Titulo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post -> userId}}</td>
                        <td>{{$post -> title}}</td>
                        <td>
                            <form action="" method="POST">
            
                                <a class="btn btn-info" href="{{ route('post.show',$post->id)}}">Show</a>
                
                                <a class="btn btn-primary" href="">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
      
@endsection