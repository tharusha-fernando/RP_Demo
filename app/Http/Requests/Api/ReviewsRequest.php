<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ReviewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
        //return false;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user'=>$this->user()->id
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'review'=>'required',
            'user'=>'required|exists:users,id',
            'book'=>'required|exists:books,id'
            //
        ];
    }
}
