<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmmaStoryRequest extends FormRequest
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
            'intro' => 'required',
            'content' =>  'required',
            'image' =>  'required',
            'pdf' =>  'required',
            'video-link' =>  'required',
        ];
    }
}
