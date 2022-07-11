<x-layouts.app
    title="{{$post->title}}"
    meta-description="{{$post->body}}"
>

    <h1>Detalhes do post</h1>

    <h2>{{ $post->title }}</h2>
    <p>{{$post->body}}</p>

    <a href="{{route('posts.index')}}">Voltar</a>
</x-layouts.app>
