<?php

namespace App\Repositories;

use App\Models\Floor;
use App\Repositories\BaseRepository;

/**
 * Class FloorRepository
 * @package App\Repositories
 * @version October 29, 2020, 5:13 pm UTC
*/

class FloorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'balcony'
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
        return Floor::class;
    }
}
