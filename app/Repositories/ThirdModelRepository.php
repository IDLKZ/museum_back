<?php

namespace App\Repositories;

use App\Models\ThirdModel;
use App\Repositories\BaseRepository;

/**
 * Class ThirdModelRepository
 * @package App\Repositories
 * @version November 18, 2021, 1:40 pm UTC
*/

class ThirdModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return ThirdModel::class;
    }
}
