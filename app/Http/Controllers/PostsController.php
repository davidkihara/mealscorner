<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth',['except'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::paginate(3);
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $post = new Post;

        $path1 = Storage::putFile('public', $request->file('files1'));
        $url1 = Storage::url($path1);
        $path2 = Storage::putFile('public', $request->file('files2'));
        $url2 = Storage::url($path2);
        $path3 = Storage::putFile('public', $request->file('files3'));
        $url3 = Storage::url($path3);
        $path4 = Storage::putFile('public', $request->file('files4'));
        $url4 = Storage::url($path4);
        $path5 = Storage::putFile('public', $request->file('files5'));
        $url5 = Storage::url($path5);
        $path6 = Storage::putFile('public', $request->file('files6'));
        $url6 = Storage::url($path6);

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image1 = $url1;
        $post->image2 = $url2;
        $post->image3 = $url3;
        $post->image4 = $url4;
        $post->image5 = $url5;
        $post->image6 = $url6;
        $post->ingredients = $request->ingredients;
        $post->recipe = $request->recipe;

        $post->save();

        // return view('posts.index');
        //return view('posts.index')->with('Success', 'Posted');
        return redirect()->back()->with('Success', 'Post uploaded successfull');
        // return ('posts.index')->with('Success', 'Post uploaded successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if (auth()->user()->id !== $post->user_id) {
          return('Unauthorised Access');
        }else{
          return view('posts.edit',['post'=>$post]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::find($id);

      $path = Storage::putFile('public', $request->file('files'));
      $url = Storage::url($path);

      $post->name = $request->name;
      $post->description = $request->description;
      $post->image = $url;
      $post->ingredients = $request->ingredients;
      $post->recipe = $request->recipe;

      $post->update();

      return redirect()->back()->with('Success', 'Post updated successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('Success', 'Post deleted');
    }
    public function showRecipe()
    {
      return view('posts.recipe');
    }
}
