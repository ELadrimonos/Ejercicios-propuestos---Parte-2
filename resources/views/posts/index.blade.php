@extends("plantilla")
@section("titulo", "LISTADO DE POSTS")
@section("contenido")
    <h1>Listado de posts</h1>
    <section class="container w-50 gap-5 d-flex flex-wrap
    justify-content-center h-50">
    @foreach($posts as $post)
            <div class="card p-4 h-50 d-flex flex-column justify-content-between mw-25 w-25">
                <h2>{{$post->titulo}} <i>({{$post->usuario->login}})</i></h2>
                <p>{{substr($post->contenido, 0, 10) . '...'}}</p>
                <a class="btn btn-primary" href="{{route('posts.show', $post->id)}}">Ver detalles</a>
                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar" class="btn btn-danger">
                </form>
            </div>

    @endforeach
    </section>
    {{$posts->links()}}

@endsection
