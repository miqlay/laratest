<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
 
        return view('articles.index', compact('articles'));
    }
 
    public function show($id) {
        //主キーで検索するときに使うやつ
        $article = Article::findOrFail($id);
 
        return view('articles.show', compact('article'));
    }
}
