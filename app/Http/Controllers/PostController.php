<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index',compact('posts'));
    }

    public function show( Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $post = New Post();
        return view('posts.create', compact('post'));
    }

    public function store(SavePostRequest $request)
    {
        /*$validated = $request->validate([
            'title'=>['required','min:4'],
            'body'=>['required']
        ]);*/

        Post::create($request->validated());

//        session()->flash('status','Post criado com sucesso!');

        return to_route('posts.index')
            ->with('status','Post criado com sucesso');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update(SavePostRequest $request,Post $post)
    {

        /*$post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();*/

        $post->update($request->validated());

        session()->flash('status','Post atualizado com sucesso!');
        return to_route('posts.index');
    }

}
