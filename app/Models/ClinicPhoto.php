<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicPhoto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'url',
        'clinic_id',
    ];

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }
}
