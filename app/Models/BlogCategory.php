<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }
}
