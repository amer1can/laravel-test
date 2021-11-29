<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller{

    public function index() {

        $data =  DB::table('article_models')
            ->orderBy('id','desc')
            ->get();
        $lastArticles = $data->take(6);
        return view('index', [
            'lastArticles' => $lastArticles,
        ]);
    }

    public function allArticles() {

        $allArticles = DB::table('article_models')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('elems.articles', [
           'allArticles' => $allArticles,
        ]);
    }

    public function showArticle($id) {

        $article = DB::select('select * from article_models where id = ?', [$id]);

        return view('elems.showArticle', [
           'article' => $article[0]
        ]);
    }

    public function likeArticle($id) {

        $article_likes = DB::table('article_models')->where('id', $id)->value('likes');

        DB::update('update article_models set likes = :v where id = :id', ['v' => $article_likes + 1, 'id' => $id]);

        $this->index();
    }

    public function updateLikes($id) {



    }
}
