<?php

namespace App\Http\Requests;

use App\Models\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAddressRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('address_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'type_value' => [
                'integer',
                'exists:dicts,value',
                'required',
            ],
        ];
    }
}
