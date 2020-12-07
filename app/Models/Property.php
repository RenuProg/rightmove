<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Property
 * @package App\Models
 * @version October 30, 2020, 10:16 am UTC
 *
 * @property \App\Models\Balcony $balcony
 * @property \App\Models\Bathroom $bathroom
 * @property \App\Models\Bedroom $bedroom
 * @property \App\Models\Floor $floor
 * @property \App\Models\PropertySubType $propertySubType
 * @property \App\Models\PropertyType $propertyType
 * @property integer $property_type_id
 * @property integer $property_sub_type_id
 * @property string $property_title
 * @property string $total_area
 * @property string $builtup_area
 * @property string $carpet_area
 * @property string $localtion
 * @property string $price
 * @property integer $bathroom_id
 * @property integer $bedroom_id
 * @property integer $balcony_id
 * @property integer $floor_id
 * @property string $about_property
 * @property string $image
 * @property boolean $is_active
 */
class Property extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'properties';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'property_type_id',
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
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'property_type_id' => 'integer',
        'property_sub_type_id' => 'integer',
        'property_title' => 'string',
        'total_area' => 'string',
        'builtup_area' => 'string',
        'carpet_area' => 'string',
        'location' => 'string',
        'price' => 'string',
        'bathroom_id' => 'integer',
        'bedroom_id' => 'integer',
        'balcony_id' => 'integer',
        'floor_id' => 'integer',
        'about_property' => 'string',
        //'image' => 'string',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'property_type_id' => 'nullable',
        'property_sub_type_id' => 'required',
        'property_title' => 'required|string|max:255',
        'total_area' => 'required|string|max:255',
        'builtup_area' => 'required|string|max:255',
        'carpet_area' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'bathroom_id' => 'required',
        'bedroom_id' => 'required',
        'balcony_id' => 'required',
        'floor_id' => 'required',
        'about_property' => 'required|string|max:255',
        //'image' => 'required|string|max:255',
        // 'is_active' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function balcony()
    {
        return $this->belongsTo(\App\Models\Balcony::class, 'balcony_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bathroom()
    {
        return $this->belongsTo(\App\Models\Bathroom::class, 'bathroom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bedroom()
    {
        return $this->belongsTo(\App\Models\Bedroom::class, 'bedroom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function floor()
    {
        return $this->belongsTo(\App\Models\Floor::class, 'floor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function propertySubType()
    {
        return $this->belongsTo(\App\Models\PropertySubType::class, 'property_sub_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function propertyType()
    {
        return $this->belongsTo(\App\Models\PropertyType::class, 'property_type_id');
    }
}
