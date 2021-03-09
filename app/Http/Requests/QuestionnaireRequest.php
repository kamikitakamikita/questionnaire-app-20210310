<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionnaireRequest extends FormRequest
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
            'username' => 'required|string',
            'age' => 'required',
            'gender' => 'required',
            'property_type' => 'required',
            'remarks' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'username.required' => '氏名 を入力してください。',
            'age.required' => '年齢 を選択してください。',
            'gender.required' => '性別 を選択してください。',
            'property_type.required' => '希望物件種別 を選択してください。',
            'remarks.required' => 'その他ご要望 を入力してください。',
        ];
    }
}
