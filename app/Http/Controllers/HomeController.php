<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categories = Categorie::all();

        $articles = Article::select(
            'articles.id',
            'articles.titre',
            'articles.image',
            'articles.contenu',
            'articles.created_at',
            'categories.titre as categorie',
            'users.name'
        )->join('users', 'articles.user_id', 'users.id')
        ->join('categories', 'articles.category_id', 'categories.id')
        ->get();

        return view('home', compact('articles', 'categories'));
    }

}