<?php

namespace App\Repositories;

use App\Models\FAQ;
use App\Repositories\BaseRepository;

/**
 * Class FAQRepository
 * @package App\Repositories
 * @version November 4, 2021, 3:48 pm UTC
*/

class FAQRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question_ru',
        'question_en',
        'question_kz',
        'question_de',
        'question_fr',
        'question_es',
        'question_tr',
        'answer_ru',
        'answer_en',
        'answer_kz',
        'answer_de',
        'answer_fr',
        'answer_es',
        'answer_tr'
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
        return FAQ::class;
    }
}
