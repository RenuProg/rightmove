<?php

namespace App\Repositories;

use App\Models\PropertySubType;
use App\Repositories\BaseRepository;

/**
 * Class PropertySubTypeRepository
 * @package App\Repositories
 * @version October 29, 2020, 12:58 pm UTC
*/

class PropertySubTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_type_id',
        'type'
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
        return PropertySubType::class;
    }
}
