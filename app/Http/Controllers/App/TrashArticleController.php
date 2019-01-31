<?php

namespace App\Http\Controllers\App;

use App\Models\Article;
use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrashArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {
        $article = Article::onlyTrashed()->findOrFail($article);

        if ($request->exists('restore')) {
            $article->restore();
        }

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
