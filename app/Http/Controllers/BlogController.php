<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    public function show(){
        return view('blog');
    }
}
