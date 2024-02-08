@extends('plantilla')
@section('titulo', 'DETALLES DE POST')
@section('contenido')
    <div class="">
        <h1 class="display-4 fs-lg-1">{{$post->titulo}} <i>({{$post->usuario->login}})</i></h1>
        <p class="lead fs-4">{{$post->contenido}}</p>

{{--        <form action="{{route('posts.destroy')}}" method="POST">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <input type="hidden" name="id" value="{{$post->id}}">--}}
{{--            <input type="submit" value="Borrar" class="btn btn-danger">--}}
{{--        </form>--}}


        @if(!empty($post->created_at))
            <h6 class="fs-5">Creado el {{$post->created_at}}</h6>
        @endif

        @if(!empty($post->updated_at))
            <h6>Actualizado el {{$post->updated_at}}</h6>
        @endif
    </div>
@endsection
