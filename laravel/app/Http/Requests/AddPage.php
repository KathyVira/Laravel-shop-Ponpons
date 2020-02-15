<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPage extends FormRequest
{
    public static $requestType = "|unique:pages,page_name";
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
        if ($request->requestType && $request->requestType == "update") {
            self::$requestType = "";
        }
        return [
            "page_name" => "required|min:2|max:30" . self::$requestType,
            "title_main" => "required|min:2|max:500",
            "text_main" => "required|min:2|max:500",
            "image" => "file|image",
        ];
    }
}
