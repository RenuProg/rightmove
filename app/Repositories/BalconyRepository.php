<?php

namespace App\Repositories;

use App\Models\Balcony;
use App\Repositories\BaseRepository;

/**
 * Class BalconyRepository
 * @package App\Repositories
 * @version October 29, 2020, 5:11 pm UTC
*/

class BalconyRepository extends BaseRepository
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
        return Balcony::class;
    }
}
