<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'commentaire',
        'article_id'

    ];

    public static function CountByarticle($article)
    {
        return self::join('articles', 'commentaires.article_id', 'articles.id')
            ->where('commentaires.article_id', $article)
            ->count();
    }

    public static function getByarticle($article)
    {
        return self::select(
            'commentaires.id',
            'commentaires.nom',
            'commentaires.commentaire',
            'commentaires.created_at',
            )->join('articles', 'commentaires.article_id', 'articles.id')
            ->where('commentaires.article_id', $article)
            ->get();
    }
}
