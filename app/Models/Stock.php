<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'id',
        'name',
        'preview_picture',
        'preview_text',
        'active_from',
        'active_to',
        'stock_percent',
        'active',
        'ad_picture',
        'show_in_ad',
        'created_at',
        'updated_at',
        'service_id',
        'clinic_id',
        'region_id',
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
