<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery
 * @package App\Models
 * @version November 4, 2021, 4:12 pm UTC
 *
 * @property \App\Models\Hall $hall
 * @property \App\Models\3dmodel $model
 * @property \App\Models\News $news
 * @property \App\Models\Tour $tour
 * @property string $image
 * @property integer $hall_id
 * @property integer $tour_id
 * @property integer $model_id
 * @property integer $news_id
 */
class Gallery extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'galleries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'hall_id',
        'tour_id',
        'model_id',
        'news_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'hall_id' => 'integer',
        'tour_id' => 'integer',
        'model_id' => 'integer',
        'news_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|string|max:500',
        'hall_id' => 'required',
        'tour_id' => 'required',
        'model_id' => 'required',
        'news_id' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function model()
    {
        return $this->belongsTo(\App\Models\ThirdModel::class, 'model_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function news()
    {
        return $this->belongsTo(\App\Models\News::class, 'news_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id');
    }
}
