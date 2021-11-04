<?php

namespace App\Repositories;

use App\Models\Tour;
use App\Repositories\BaseRepository;

/**
 * Class TourRepository
 * @package App\Repositories
 * @version November 3, 2021, 5:57 pm UTC
*/

class TourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hall_id',
        'prev_tour',
        'next_tour',
        'image',
        'alias',
        'title_ru',
        'title_kz',
        'title_en',
        'title_de',
        'title_fr',
        'title_es',
        'title_tr',
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
        return Tour::class;
    }
}
