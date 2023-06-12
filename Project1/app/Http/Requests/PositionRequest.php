<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
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
            'name' => ['required'],
            'salary' => ['required', 'max:50', 'min:3'],
            'status' => ['required']
        ];

        $request->merge([
            'salary' => preg_replace('/\D/', '', $request->salary),
        ]);
    }
}
