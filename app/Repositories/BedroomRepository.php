<?php

namespace App\Repositories;

use App\Models\Bedroom;
use App\Repositories\BaseRepository;

/**
 * Class BedroomRepository
 * @package App\Repositories
 * @version October 29, 2020, 5:03 pm UTC
*/

class BedroomRepository extends BaseRepository
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
        return Bedroom::class;
    }
}
