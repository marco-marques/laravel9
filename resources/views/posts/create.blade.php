<x-layouts.app
    title="Novo post"
    meta-description="Formulário para criar novo post"
>
    <h2>Novo post</h2>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        @include('posts.form-fields')

        <hr>
        <button type="submit">Enviar</button>

    </form>
    <br>
    <a href="{{route('posts.index')}}">Voltar</a>
</x-layouts.app>
