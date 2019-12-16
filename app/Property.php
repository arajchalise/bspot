<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'type',
        'business_type',
        'property_name',
        'description',
        'location',
        'photo'
    ];   
}
