@extends('plantilla')
@section('titulo', 'DETALLES DE POST')
@section('contenido')
    <div class="container">
        <div class="row">
            <h1 class="display-3 "><strong>{{$post->titulo}} <i>({{$post->usuario->login}})</i></strong></h1>
            <p class="lead fs-4">{{$post->contenido}}</p>

    {{--        <form action="{{route('posts.destroy')}}" method="POST">--}}
    {{--            @csrf--}}
    {{--            @method('DELETE')--}}
    {{--            <input type="hidden" name="id" value="{{$post->id}}">--}}
    {{--            <input type="submit" value="Borrar" class="btn btn-danger">--}}
    {{--        </form>--}}
            @if(!empty($post->created_at))
                <h4 class="fs-6">Creado el {{$post->created_at}}</h4>
            @endif

            @if(!empty($post->updated_at))
                <h4 class="fs-6">Actualizado el {{$post->updated_at}}</h4>
            @endif
        </div>
        <div class="row gap-3">
            <h2 class="display-5">Comentarios</h2>
            <hr>

            <form action="{{route('comentarios.store')}}" method="post" class="d-flex flex-column gap-2">
                @csrf
                @method('POST')
                <h3>Crear comentario</h3>
                <input type="hidden" name="id_post" value="{{$post->id}}">
                <div class="row">
                    <div class="col">
                        <label for="id_usuario">Usuario</label>
                        <select class="form-control form-control-lg" name="id_usuario" id="id_usuario">
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->login}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="contenido">Contenido</label>
                        <textarea class="d-block w-100 " name="contenido" id="contenido"></textarea>
                    </div>
                </div>
                <input type="submit" value="Crear" class="btn btn-success">
            </form>

            @foreach($post->comentarios as $comentario)
                <div class="card row d-flex flex-column gap-1 justify-content-around">
                    <p class="lead fs-2">{{$comentario->contenido}}</p>
                    <h3 class="fs-3"><strong>{{$comentario->usuario->login}}</strong></h3>
                    @if(!empty($post->created_at))
                        <h4 class="fs-6">Creado el {{$comentario->created_at}}</h4>
                    @endif

                    @if(!empty($post->updated_at))
                        <h4 class="fs-6">Actualizado el {{$comentario->updated_at}}</h4>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
