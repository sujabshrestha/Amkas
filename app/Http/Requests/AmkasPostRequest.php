<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AmkasPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'shelterCase' => 'required',
            'date_of_arr' => 'required',
            'date_of_reg' => 'required',
            'date_of_dep' => 'required',
            'name' => 'required',
            'date_of_birth' => 'required',
            'passportno' => 'required',
            'original_add' => 'required',
            'contact_no' => 'required',
            'age' => 'required',
            'education'  => 'required',
            'forign_emp'  => 'required',
            'transitCountry'  => 'required',
            'no_of_child'  => 'required',
            'duration_of_stay'  => 'required',
            'docx'  => 'required',
            'parent'  => 'required',
        ];
    }
}
