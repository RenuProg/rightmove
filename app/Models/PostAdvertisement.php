<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAdvertisement extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = ['property_type_id',
        'property_sub_type_id',
        'property_title',
        'total_area',
        'builtup_area',
        'carpet_area',
        'location',
        'price',
        'bathroom_id',
        'bedroom_id',
        'balcony_id',
        'floor_id',
        'about_property',
        'image',
        'is_active']; 
}
