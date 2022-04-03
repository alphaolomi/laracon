<?php

namespace Alphaolomi\Laracon;
use Illuminate\Support\Facades\Http;

class Laracon
{
    public function getPosts()
    {
        // return ["Post 1", "Post 2"];
        $response = Http::get('https://jsonplaceholder.typicode.com/posts?_limit=3');
        return  $response->collect();
    }
}
