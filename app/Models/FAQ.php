<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FAQ
 * @package App\Models
 * @version November 4, 2021, 3:48 pm UTC
 *
 * @property string $question_ru
 * @property string $question_en
 * @property string $question_kz
 * @property string $question_de
 * @property string $question_fr
 * @property string $question_es
 * @property string $question_tr
 * @property string $answer_ru
 * @property string $answer_en
 * @property string $answer_kz
 * @property string $answer_de
 * @property string $answer_fr
 * @property string $answer_es
 * @property string $answer_tr
 */
class FAQ extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'faq';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question_ru' => 'string',
        'question_en' => 'string',
        'question_kz' => 'string',
        'question_de' => 'string',
        'question_fr' => 'string',
        'question_es' => 'string',
        'question_tr' => 'string',
        'answer_ru' => 'string',
        'answer_en' => 'string',
        'answer_kz' => 'string',
        'answer_de' => 'string',
        'answer_fr' => 'string',
        'answer_es' => 'string',
        'answer_tr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question_ru' => 'required|string|max:500',
        'question_en' => 'required|string|max:500',
        'question_kz' => 'required|string|max:500',
        'question_de' => 'nullable|string|max:500',
        'question_fr' => 'nullable|string|max:500',
        'question_es' => 'nullable|string|max:500',
        'question_tr' => 'nullable|string|max:500',
        'answer_ru' => 'required|string',
        'answer_en' => 'required|string',
        'answer_kz' => 'required|string',
        'answer_de' => 'nullable|string',
        'answer_fr' => 'nullable|string',
        'answer_es' => 'nullable|string',
        'answer_tr' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
