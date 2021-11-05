<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ThirdModel;

class UpdateThirdModelRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = ThirdModel::$rules;
        $rules["image"] = 'nullable|sometimes|image|max:150000';
        $rules["wavefront"] = 'nullable|sometimes|file|max:150000';
        $rules["texture"] = 'nullable|sometimes|file|max:150000';
        $rules["texture_image"] = 'nullable|sometimes|file|max:150000';
        return $rules;
    }
}
