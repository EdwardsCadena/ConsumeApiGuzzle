<?php

namespace App\Http\Controllers;

use App\Repositories\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts;

    public function __construct(Post $posts){
        $this->posts = $posts;
    }
    public function index(){
        $titulo = 'Publicaciones';

        $posts = $this->posts->lst();

        return view('post.index', compact('posts','titulo'));
    }
    public function show($id){
        $titulo = "Publicacion";
        $post = $this->posts->view();

        return view();
    }
}
