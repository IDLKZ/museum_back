<?php

namespace App\Models;

use App\Traitors\FileUploader;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tour
 * @package App\Models
 * @version November 3, 2021, 5:57 pm UTC
 *
 * @property \App\Models\Hall $hall
 * @property \Illuminate\Database\Eloquent\Collection $galleries
 * @property integer $hall_id
 * @property integer $prev_tour
 * @property integer $next_tour
 * @property string $image
 * @property string $alias
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $title_de
 * @property string $title_fr
 * @property string $title_es
 * @property string $title_tr
 * @property string $audio_ru
 * @property string $audio_kz
 * @property string $audio_en
 * @property string $audio_de
 * @property string $audio_fr
 * @property string $audio_es
 * @property string $audio_tr
 * @property string $video_ru
 * @property string $video_kz
 * @property string $video_en
 * @property string $video_de
 * @property string $video_fr
 * @property string $video_es
 * @property string $video_tr
 */
class Tour extends Model
{
    //use SoftDeletes;

    use HasFactory;

    use Sluggable;
    use FileUploader;

    public $table = 'tours';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    public function sluggable(): array
    {
        return [
            'alias' => [
                'source' => 'title_ru'
            ]
        ];
    }



    public $fillable = [
        'hall_id',
        'prev_tour',
        'next_tour',
        'image',
        "panorama",
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hall_id' => 'integer',
        'prev_tour' => 'integer',
        'next_tour' => 'integer',
        'image' => 'string',
        'alias' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'title_de' => 'string',
        'title_fr' => 'string',
        'title_es' => 'string',
        'title_tr' => 'string',
        'audio_ru' => 'string',
        'audio_kz' => 'string',
        'audio_en' => 'string',
        'audio_de' => 'string',
        'audio_fr' => 'string',
        'audio_es' => 'string',
        'audio_tr' => 'string',
        'video_ru' => 'string',
        'video_kz' => 'string',
        'video_en' => 'string',
        'video_de' => 'string',
        'video_fr' => 'string',
        'video_es' => 'string',
        'video_tr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hall_id' => 'required|exists:halls,id',
        'prev_tour' => 'nullable|exists:tours,id',
        'next_tour' => 'nullable|exists:tours,id',
        'image' => 'required|file|image|max:100000',
        'panorama' => 'required|file|image|max:100000',
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'required|string|max:500',
        'title_en' => 'required|string|max:500',
        'title_de' => 'nullable|string|max:500',
        'title_fr' => 'nullable|string|max:500',
        'title_es' => 'nullable|string|max:500',
        'title_tr' => 'nullable|string|max:500',
        'audio_ru' => 'nullable|file|max:100000',
        'audio_kz' => 'nullable|file|max:100000',
        'audio_en' => 'nullable|file|max:100000',
        'audio_de' => 'nullable|file|max:100000',
        'audio_fr' => 'nullable|file|max:100000',
        'audio_es' => 'nullable|file|max:100000',
        'audio_tr' => 'nullable|file|max:100000',
        'video_ru' => 'nullable|string|url|max:500',
        'video_kz' => 'nullable|string|url|max:500',
        'video_en' => 'nullable|string|url|max:500',
        'video_de' => 'nullable|string|url|max:500',
        'video_fr' => 'nullable|string|url|max:500',
        'video_es' => 'nullable|string|url|max:500',
        'video_tr' => 'nullable|string|url|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function hall()
    {
        return $this->belongsTo(\App\Models\Hall::class, 'hall_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galleries()
    {
        return $this->hasMany(\App\Models\Gallery::class, 'tour_id');
    }
}
