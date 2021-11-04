<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\BaseRepository;

/**
 * Class AboutRepository
 * @package App\Repositories
 * @version November 4, 2021, 3:28 pm UTC
*/

class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'title_ru',
        'title_kz',
        'title_en',
        'title_de',
        'title_fr',
        'title_es',
        'title_tr',
        'description_ru',
        'description_en',
        'description_kz',
        'description_de',
        'description_fr',
        'description_es',
        'description_tr',
        'status'
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
        return About::class;
    }
}
