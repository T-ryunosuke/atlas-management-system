<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'under_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'mail_address' => 'required|string|email:filter,dns|max:100|unique:users',
            'sex' => 'required|numeric|between:1,3',
            'birth_day' => 'date',
            'old_year' => 'required',
            'old_month' => 'required',
            'old_day' => 'required',
            'role' => 'required|numeric|between:1,4',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function getValidatorInstance()
      {
        if ($this->input('old_year') && $this->input('old_month') && $this->input('old_day'))
        {
            $birth_day = implode('-', $this->only(['old_year', 'old_month', 'old_day']));
            $this->merge([
                'birth_day' => $birth_day,
            ]);
        }

        return parent::getValidatorInstance();
      }
}
