@extends('layaout.app')
@section('content')
<br>
<div class="ui grid stackable ">
    <div class="row">
        <div class="ui twelve wide column">
            <h2>Publicaciones</h2>

    @if(sizeof($posts) > 0)
        <table class="ui fixed table">
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
                </tr>
            @endforeach
                
            </tbody>
        </table>
    @else
        <div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
               Error
            </div>
            <p>No se encontraron publicaciones
            </p>
        </div>
    @endif
        </div>
        <div class="ui four wide column">
            <h2>Crea Usuario</h2>
            <form class="ui form" action="" method="POST">
                    {{csrf_field()}}
                <div class="ui inverted grey segment">
                    <div class="ui inverted form">
                        <div class="field">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" placeholder="Example">
                        </div>
                        <div class="field">
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" placeholder="Example">
                        </div>
                        <div class="field">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" name="email" placeholder="Example@example.com">
                        </div>
                    </div>
                    <br>
                    <button class="tiny ui inverted green button " type="submit">Registrar</button>
                </div>
            </form>
        </div>    
    </div>
</div>


    
    

    
@stop