<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller{

    public function index() {

        $data =  DB::table('article_models')->get();
        $lastArticles = $data->take(6);
//        $lastArticles = DB::table('article_models')->first();
        return view('index', [
            'lastArticles' => $lastArticles
        ]);
    }

    public function allArticles() {
//        $articles = DB::select('select * from article_models');

        $articles = DB::table('article_models')->paginate(5);

        return view('elems.articles', [
           'articles' => $articles
        ]);
    }

    public function showArticle($id) {

        $article = DB::select('select * from article_models where id = ?', [$id]);

        return view('elems.showArticle', [
           'article' => $article[0]
        ]);

    }
}
