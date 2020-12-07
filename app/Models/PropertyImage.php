<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;


    public $table = 'postimages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'prodperty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'prodperty_id' => 'integer'
    ];

}
