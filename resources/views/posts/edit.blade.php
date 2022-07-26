<x-layouts.app
    title="{{$post->title}}"
    meta-description="{{$post->body}}"
>

    <h1>Editar post</h1>

    <form action="{{route('posts.update',$post)}}" method="POST">
        @csrf
        @method('PATCH')

        @include('posts.form-fields')

        <hr>
        <button type="submit">Enviar</button>

    </form>

    <a href="{{route('posts.index')}}">Voltar</a>
</x-layouts.app>
