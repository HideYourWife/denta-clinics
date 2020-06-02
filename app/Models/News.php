<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'preview_picture',
        'detail_picture',
        'preview_text',
        'text_1',
        'text_2',
        'recommended',
        'created_at',
        'updated_at',
        'news_id',
    ];

    public function related()
    {
        return $this->belongsTo('App\Models\News');
    }
}
