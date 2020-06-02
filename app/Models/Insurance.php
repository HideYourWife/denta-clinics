<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'id',
        'name',
        'active',
        'created_at',
        'updated_at',
    ];

    public function clinics()
    {
        return $this->hasMany('App\Models\Clinic', 'clinic_insurances');
    }
}
