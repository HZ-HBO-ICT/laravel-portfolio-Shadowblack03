<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('/blog.index', [articles => $articles]);
    }
    public function show($id)
    {
        $article = Article::find(Article $article);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

     public function store(Request $request)
     {
         Article::create($this->validateArticle($request));

         return redirect(route('articles.index'))   ;
     }

     public function edit($id)
{
    return view('article.edit', ['article' => $article]);
}

public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticel($request));

        return redirect(route('article.show', $article));
    }

    public function destroy(Request $request)
{
    $article->delete();
    return redirect(route('article.index'));
}

public function validateArticle(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'occupation' => 'required',
            'job_description' => ''
        ]);
    }

//    public function store()
//    {
//        Request()->validate([
//            'title' => 'required',
//            'excerpt' => 'required',
//            'body' => 'required'
//        ]);
//        $articles = Article::find(Article $id);
//    $articles->title = request('title');
//    $articles->excerpt = request('excerpt');
//    $articles->body = request('body');
//    $articles->save();
//    }


    return direct('/articles/' . $article->id);
}
