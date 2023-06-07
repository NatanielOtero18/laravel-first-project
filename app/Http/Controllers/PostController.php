<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //cuando hay que solo utilizar un metodo
    /*public function __invoke(){
        $posts = DB::table('posts')->get();

         return view('blog',['posts'=>$posts]);
    }*/
    public function __construct(){
        $this->middleware('auth',['except' => ['index','show']]);
        //$this->middleware('auth',['only' => ['index','show']]); para decir cuales llevan o except para quienes no

    }

    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }
    public function create(){

        return view('posts.create',['post' => new Post]);
    }
    public function store(SavePostRequest $request){


        Post::create($request->validated());


        return to_route('posts.index')->with('status','Post created');
        //Redirige automaticamente a la ruta indicada
        //with envia un mensaje, alternativa a flash
    }
    public function edit(Post $post){
        return view('posts.edit',['post' => $post]);
       //return $post;
    }
    public function update(SavePostRequest $request, Post $post){


        $post->update($request->validated());

        session()->flash('status',"Post updated");//Envia un mensaje alternativamente se puede usar ->with
        return to_route('posts.show',$post); //Redirige automaticamente a la ruta indicada
    }
    public function destroy(Post $post){
        $post->delete();

        return to_route('posts.index')->with('status','Deleted');
    }

}




?>
