<?php

namespace App\Models;

use App\Traitors\FileUploader;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Event
 * @package App\Models
 * @version December 12, 2021, 9:52 am UTC
 *
 * @property string $image
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
 * @property string $date_start
 * @property string $date_end
 */
class Event extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use FileUploader;
    use Sluggable;
    public $table = 'events';
    
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
        'date_start',
        'date_end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
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
        'date_start' => 'string',
        'date_end' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|max:100000',
        'alias' => 'string|max:500',
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
        'date_start' => 'required|string|max:255',
        'date_end' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
