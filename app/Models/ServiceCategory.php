<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
}
