<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Article::paginate(7);
        return view('articles.index',['info'=> $info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'date'=>'required','name'=>'required','shortdesc'=>'required','desc'=>'required'
        ]);
        // return response() -> json($request);
        $new = new Article();
        $new -> date = request('date');
        $new -> name = request('name');
        $new -> shortdesc = request('shortdesc');
        $new -> desc = request('desc');
        $new -> save();
        return redirect()-> route('article.show',['article'=> $new -> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $comment = Comment::where('article_id', $article -> id)-> get();
        return view('articles.show',['info'=>$article ,'comment'=> $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.update',['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request -> validate([
            'date'=>'required','name'=>'required','shortdesc'=>'required','desc'=>'required'
        ]);
        $article -> date = $request -> date; 
        $article -> name = $request -> name;
        $article -> shortdesc = $request -> shortdesc;
        $article -> desc = $request -> desc;
        $article -> save();
        return redirect()-> route('article.show',['article'=> $article -> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::where('id', $article -> id)->delete();
        return redirect() -> route('article.index',['info'=>$article]);
    }
}
