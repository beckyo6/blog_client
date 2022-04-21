<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titre',
        'contenu',
        'image',
        'category_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getBycategory($category)
    {
        return self::select(
            'articles.id',
            'articles.titre',
            'articles.image',
            'articles.contenu',
            'articles.created_at',
            'categories.titre as categorie',
            'users.name'
        )->join('users', 'articles.user_id', 'users.id')
        ->join('categories', 'articles.category_id', 'categories.id')
        ->where('categories.id', $category)
        ->get();
    }
}
