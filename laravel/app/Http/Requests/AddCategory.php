<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AddCategory extends FormRequest
{
    public static $requestType = "|unique:categories,cat_name";
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
    public function rules(Request $request)
    {
        if ($request->requestType && $request->requestType == "update") {
            self::$requestType = "";
        }
        return [
            "cat_name" => "required|min:2|max:30" . self::$requestType,
            "description" => "required|min:2|max:100",

            "image" => "file|image",
        ];
    }
}
