<x-layouts.app
    title="Blog"
    meta-description="Bloh meta description"
>

    <h1>Blog</h1>

    <a href="{{route('posts.create')}}">Novo</a>

    @foreach($posts as $post)
        <h2>
            <a href="{{route('posts.show',$post)}}">{{$post->title}}</a>
        </h2>
    @endforeach

</x-layouts.app>
