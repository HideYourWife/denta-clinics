<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'created_at',
        'updated_at',
        'active',
        'detail_text',
        'detail_picture',
        'preview_picture',
        'preview_text',
        'blog_category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\BlogCategory');
    }
}
