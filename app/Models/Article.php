<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'slug', 'body', 'img', 'published_at' ];

    public function state()
    {
        return $this->hasOne( State::class );
    }

    public function comments()
    {
        return $this->hasMany( Comment::class );
    }

    public function tags()
    {
        return $this->belongsToMany( Tag::class );
    }



}
