<label for="title">Title</label>
<input type="text" name="title" id="title" value="{{ old('title',$post->title) }}">
@error('title')
    <br>
    <small style="color: red">{{ $message }}</small>
@enderror
<br>
<label for="body">Body</label>
<br>
<textarea name="body" id="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
@error('body')
    <br>
    <small style="color: red">{{ $message }}</small>
@enderror
