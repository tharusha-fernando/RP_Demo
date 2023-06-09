<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BooksRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> ['required', 'string', 'max:255'],
            'author'=> ['required', 'string', 'max:255'],
            //'date'=>'required',
            'description'=>'required',
            'catogory'=>'required',
            //'cover_photo'=>'required',
            'cover_photo' => 'nullable|image|max:1024'
            //''
            //
        ];
    }
}
