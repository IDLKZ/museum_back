<?php

namespace App\Repositories;

use App\Models\Survey;
use App\Repositories\BaseRepository;

/**
 * Class SurveyRepository
 * @package App\Repositories
 * @version December 28, 2021, 9:43 am UTC
*/

class SurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'alias',
        'title_ru',
        'title_kz',
        'title_en',
        'title_de',
        'title_fr',
        'title_es',
        'title_tr',
        'url_ru',
        'url_kz',
        'url_en',
        'url_de',
        'url_fr',
        'url_es',
        'url_tr'
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
        return Survey::class;
    }
}
