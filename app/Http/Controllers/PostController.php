<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); 
        //all untuk mengambil smeuanya //manual static paginate(3)

        return view('post.index', compact('posts'));
    }
  
    public function create() 
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }


    public function store()
    {
        Post::create([
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'Alamat'=> request('Alamat'),
            'category_id' => request('category_id')
        ]);
        
        return redirect()->route('post.index')->with('success','Post Ditambahkan');
    }
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('post.edit', compact('post','categories'));

    }
    public function update(Post $post)
    {
        $post-> update([
            'title' => request('title'),
            'Alamat'=>request('Alamat'),
            'category_id' => request('category_id'),
            'content' => request('content')
        ]);
        return redirect()->route('post.index')->with('info','Post Berhasil Diubah');
    }
    public function destroy(Post $post)
    {
        $post->Delete();

        return redirect()->route('home')->with('danger','Post Berhasil Dihapus');
    }
    public function program()
    {
        return view ('post.program');
    }
    public function desain()
    {
        return view ('post.desainer');
    }
    public function arsitek()
    {
        return view ('post.arsitek');
    }
    public function animasi()
    {
        return view ('post.animasi');
    }
}
