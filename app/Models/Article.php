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
        return $this->belongsTo(User::class, 'user_id' ,'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public static function latest($limit)
    {
        return self::limit($limit)->orderBy('created_at', 'DESC')
            ->get();
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }
}
