<?php

namespace App\Repositories;

use App\Models\Hall;
use App\Repositories\BaseRepository;

/**
 * Class HallRepository
 * @package App\Repositories
 * @version November 3, 2021, 2:28 pm UTC
*/

class HallRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'alias',
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
        'audio_ru',
        'audio_kz',
        'audio_en',
        'audio_de',
        'audio_fr',
        'audio_es',
        'audio_tr',
        'video_ru',
        'video_kz',
        'video_en',
        'video_de',
        'video_fr',
        'video_es',
        'video_tr'
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
        return Hall::class;
    }
}
