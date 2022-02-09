<?php

namespace App\Http\Controllers;

class TestController
{
    public function show($test)
    {
        $tests = [
            'my-first-post' => 'Hello this is my first blog post!',
            'me-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        if(! array_key_exists($test,$tests)) {
            abort(404, 'sorry this post was not found');
        }

        return view('post', [
            'test' => $tests[$test]
        ]);
    }
}
