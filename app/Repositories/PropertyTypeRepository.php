<?php

namespace App\Repositories;

use App\Models\PropertyType;
use App\Repositories\BaseRepository;

/**
 * Class PropertyTypeRepository
 * @package App\Repositories
 * @version October 29, 2020, 12:43 pm UTC
*/

class PropertyTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_type'
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
        return PropertyType::class;
    }
}
