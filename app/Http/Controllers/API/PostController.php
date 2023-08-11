<?php

namespace App\Http\Controllers\API;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'post_name' => 'required',
            'post_desc' => 'required',
            'author_name' => 'required'
        ]);
        return Post::create($request->all());
    }
    public function show($id)
    {
        return Post::find($id);
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }
    public function destroy($id)
    {
        return Post::destroy($id);
    }
}
