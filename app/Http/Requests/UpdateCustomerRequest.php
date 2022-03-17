<?php

namespace App\Http\Requests;

use App\Models\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_edit');
    }

    public function rules()
    {
        return [
            'phonenumber' => [
                'string',
                'nullable',
            ],
            'address_id' =>[
                'integer',
                'exists:addresses,id',
                'required',
            ],
            'type_value' => [
                'integer',
                'exists:dicts,value',
                'required',
            ],
        ];
    }
}
