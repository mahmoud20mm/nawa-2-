<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {


        return view('blog.index')->with('posts', Post::get());
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'titel' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jped|max:5048',
        ]);
        $slug = Str::slug($request->titel, '-');

        $new_img_name = uniqid() . '-' . $slug . '.' . $request->image->extension();

        $request->image->move(public_path('pics'), $new_img_name);

        Post::create([
            'titel' => $request->input('titel'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'img_path' => $new_img_name,
            'user_id' => auth()->user()->id

        ]);
        return redirect('/blog');
    }


    public function show($slug)
    {
        return view('blog.show')->with('post',Post::where('slug',$slug)->first());
    }


    public function edit($slug)
    {
        return view('blog.edit')->with('post',Post::where('slug',$slug)->first());

    }


    public function update(Request $request,$slug)
    {

        $request->validate([
            'titel' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jped|max:5048',
        ]);

        $new_img_name = uniqid() . '-' . $slug . '.' . $request->image->extension();

        $request->image->move(public_path('pics'), $new_img_name);


        Post::where('slug',$slug) ->update([
            'titel' => $request->input('titel'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'img_path' => $new_img_name,
            'user_id' => auth()->user()->id

        ]);
        return redirect('/blog/'.$slug)->with('message','The Post has been updated');




    }


    public function destroy($slug)
    {
        Post::where('slug',$slug) ->delete();
        return redirect('/blog')->with('message','The Post has been deleted');

    }
}
