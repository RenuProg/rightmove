<?php

namespace App\Repositories;

use App\Models\Bathroom;
use App\Repositories\BaseRepository;

/**
 * Class BathroomRepository
 * @package App\Repositories
 * @version October 29, 2020, 5:00 pm UTC
*/

class BathroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bathroom'
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
        return Bathroom::class;
    }
}
