<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BologrollStoreRequset extends FormRequest
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
        // return [
        //     'name' => 'required',
        //     'logo' => 'required',
        //     'url' => 'required',
        //     'title' => 'required',
        // ];
         return [
            'name' => 'required',   
            'logo' => 'required',
            'url' => 'required',
            'title' => 'required',
    
        ];
    }

     public function messages()
    {
        return [
            'name.required'=>'用户名必填',
            'logo.required'=>'图片必选',
            'url.required'=>'地址必填',
            'title.required'=>'描述必填',
            
           
        ];
    }
}
