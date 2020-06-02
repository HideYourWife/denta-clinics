<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'email',
        'vk',
        'facebook',
        'instagram',
        'phone_1',
        'phone_2',
        'phone_3',
        'ico',
        'address',
        'work_time',
        'map_coordinates',
        'reviews',
        'clinics',
        'visitors',
    ];
}
