<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metro extends Model
{
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function clinics()
    {
        return $this->hasMany('App\Models\Clinic');
    }
}
