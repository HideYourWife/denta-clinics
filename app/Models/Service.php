<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
        'service_category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\ServiceCategory', 'service_category_id');
    }
}
