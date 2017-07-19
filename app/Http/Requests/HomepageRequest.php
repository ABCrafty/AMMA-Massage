<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageRequest extends FormRequest
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
        $rules = [
            'phone' => 'required',
            'phone_text' => 'required',
            'title' => 'required',
            'content_title' => 'required',
            'title_link' => 'required',
            'service_1' => 'required',
            'service_2' => 'required',
            'service_3' => 'required',
            'service_4' => 'required',
            'offer_preview' => 'required',
            'offer_title_1' => 'required',
            'offer_title_2' => 'required',
            'offer_title_3' => 'required',
            'offer_content_1' => 'required',
            'offer_content_2' => 'required',
            'offer_content_3' => 'required',
            'offer_link_1' => 'required',
            'offer_link_2' => 'required',
            'offer_link_3' => 'required'

        ];

        return $rules;
    }
}
