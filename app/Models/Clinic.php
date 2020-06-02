<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'created_at',
        'updated_at',
        'work_from',
        'work_to',
        'phone',
        'mobile',
        'address',
        'distance',
        'email',
        'rating',
        'preview_text',
        'preview_picture',
        'official_name',
        'supervisor',
        'foundation_year',
        'detail_text',
        'map_coordinates',
        'specialists',
        'active',
        'metro_id',
        'price_type_id',
        'region_id',
    ];

    public function metro()
    {
        return $this->belongsTo('App\Models\Metro');
    }

    public function price()
    {
        return $this->belongsTo('App\Models\PriceType', 'price_type_id');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function insurances()
    {
        return $this->belongsToMany('App\Models\Insurance', 'clinic_insurances');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'clinic_tags');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\ClinicPhoto');
    }
}
