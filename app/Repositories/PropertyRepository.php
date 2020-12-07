<?php

namespace App\Repositories;

use App\Models\Property;
use App\Repositories\BaseRepository;

/**
 * Class PropertyRepository
 * @package App\Repositories
 * @version October 30, 2020, 10:16 am UTC
*/

class PropertyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_type_id',
        'property_sub_type_id',
        'property_title',
        'total_area',
        'builtup_area',
        'carpet_area',
        'localtion',
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Property::class;
    }
}
