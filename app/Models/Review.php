<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id',
        'name',
        'active',
        'email',
        'text',
        'rating',
        'clinic_id',
        'created_at',
        'updated_at',
    ];

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }
}
