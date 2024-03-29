<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStoreRequest extends FormRequest
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
        return [
            'title'=>['required'],
            'type_cooperation'=>['required'],
            'city'=>['required'],
            'time_work'=>['required'],
            'size_organization'=>['required'],
            'gender'=>['required'],
            'Introduction'=>['required'],
            'category'=>['required'],
            'score'=>['required'],
            'check'=>['required'],
            'link'=>['required'],

        ];
    }
}
