<?php

namespace App\Models;

use App\Traitors\FileUploader;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class About
 * @package App\Models
 * @version November 4, 2021, 3:28 pm UTC
 *
 * @property string $image
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
 * @property integer $status
 */
class About extends Model
{
    //use SoftDeletes;
    use FileUploader;
    use HasFactory;

    public $table = 'about';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
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
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|max:1500',
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
        'status' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
