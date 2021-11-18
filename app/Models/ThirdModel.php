<?php

namespace App\Models;

use App\Traitors\FileUploader;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ThirdModel
 * @package App\Models
 * @version November 4, 2021, 1:45 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $galleries
 * @property string $image
 * @property string $wavefront
 * @property string $texture
 * @property string $texture_image
 * @property string $alias
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $title_de
 * @property string $title_fr
 * @property string $title_es
 * @property string $title_tr
 * @property string $description_ru
 * @property string $description_en
 * @property string $description_kz
 * @property string $description_de
 * @property string $description_fr
 * @property string $description_es
 * @property string $description_tr
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
class ThirdModel extends Model
{
    //use SoftDeletes;
    use Sluggable;
    use HasFactory;
    use FileUploader;
    use Sluggable;

    public $table = '3dmodels';

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
        "showcase_id",
        'image',
        'wavefront',
        'texture',
        'texture_image',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'hall_id' => 'integer',
        "showcase_id"=>"integer",
        'id' => 'integer',
        'image' => 'string',
        'wavefront' => 'string',
        'texture' => 'string',
        'texture_image' => 'string',
        'alias' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'title_de' => 'string',
        'title_fr' => 'string',
        'title_es' => 'string',
        'title_tr' => 'string',
        'description_ru' => 'string',
        'description_en' => 'string',
        'description_kz' => 'string',
        'description_de' => 'string',
        'description_fr' => 'string',
        'description_es' => 'string',
        'description_tr' => 'string',
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
        'image' => 'required|file|image|max:100000',
        'wavefront' => 'required|file|max:100000',
        'texture' => 'required|file|max:100000',
        'texture_image' => 'required|image|max:100000',
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'required|string|max:500',
        'title_en' => 'required|string|max:500',
        'title_de' => 'nullable|string|max:500',
        'title_fr' => 'nullable|string|max:500',
        'title_es' => 'nullable|string|max:500',
        'title_tr' => 'nullable|string|max:500',
        'description_ru' => 'required|string',
        'description_en' => 'required|string',
        'description_kz' => 'required|string',
        'description_de' => 'nullable|string',
        'description_fr' => 'nullable|string',
        'description_es' => 'nullable|string',
        'description_tr' => 'nullable|string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galleries()
    {
        return $this->hasMany(\App\Models\Gallery::class, 'model_id');
    }

    public function hall()
    {
        return $this->belongsTo(\App\Models\Hall::class, 'hall_id');
    }
}
