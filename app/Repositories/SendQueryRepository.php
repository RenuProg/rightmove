<?php

namespace App\Repositories;

use App\Models\SendQuery;
use App\Repositories\BaseRepository;

/**
 * Class SendQueryRepository
 * @package App\Repositories
 * @version November 2, 2020, 2:59 pm UTC
*/

class SendQueryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'message'
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
        return SendQuery::class;
    }
}
