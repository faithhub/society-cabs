<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'provider_name',
        'image',
        'map_icon',
        'price',
        'fixed',
        'description',
        'status',
        'minute',
        'distance',
        'calculator',
        'capacity',
        'phourfrom',
        'phourto',
        'pextra'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'created_at', 'updated_at'
    ];
}
