<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Survey
 * @package App\Models
 * @version December 28, 2021, 9:43 am UTC
 *
 * @property string $alias
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $title_de
 * @property string $title_fr
 * @property string $title_es
 * @property string $title_tr
 * @property string $url_ru
 * @property string $url_kz
 * @property string $url_en
 * @property string $url_de
 * @property string $url_fr
 * @property string $url_es
 * @property string $url_tr
 */
class Survey extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use Sluggable;
    public $table = 'surveys';
    
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'alias' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'title_de' => 'string',
        'title_fr' => 'string',
        'title_es' => 'string',
        'title_tr' => 'string',
        'url_ru' => 'string',
        'url_kz' => 'string',
        'url_en' => 'string',
        'url_de' => 'string',
        'url_fr' => 'string',
        'url_es' => 'string',
        'url_tr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'required|string|max:500',
        'title_en' => 'required|string|max:500',
        'title_de' => 'nullable|string|max:500',
        'title_fr' => 'nullable|string|max:500',
        'title_es' => 'nullable|string|max:500',
        'title_tr' => 'nullable|string|max:500',
        'url_ru' => 'required|url',
        'url_kz' => 'required|url',
        'url_en' => 'required|url',
        'url_de' => 'nullable|url',
        'url_fr' => 'nullable|url',
        'url_es' => 'nullable|url',
        'url_tr' => 'nullable|url',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
