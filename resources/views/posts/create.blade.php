<x-layouts.app
    title="Novo post"
    meta-description="Formulário para criar novo post"
>
    <h2>Novo post</h2>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
        <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label for="body">Body</label>
        <br>
        <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        @error('body')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
        <hr>
        <button type="submit">Enviar</button>

    </form>
    <br>
    <a href="{{route('posts.index')}}">Voltar</a>
</x-layouts.app>
