<?php

namespace App\Repositories;
use App\Repositories\GuzzleHttp\Client;


class Post extends GuzzleHttpRequest
{

    public function lst(){
        return $this->get('posts');
    }
    public function view($id){
        return $this->get("posts/{$id}");
    }
    public function edit(){
        return $this->post("posts/{$id}");
    }
    public function add(){
        return $this->post("posts");
    }
    public function delete(){
        return $this->post("posts/{$id}");
    }
}
