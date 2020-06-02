<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'active',
    ];

    public function clinics()
    {
        return $this->belongsToMany('App\Models\Clinic', 'clinic_tags');
    }
}
