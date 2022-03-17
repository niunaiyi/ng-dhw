<?php

namespace App\Http\Requests;

use App\Models\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDropRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('drop_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'integer',
                'exists:customers,id',
                'required',
            ],
            'ljlx_value' => [
                'integer',
                'exists:garbages,value',
                'required',
            ],
            'device_id' => [
                'integer',
                'exists:devices,id',
                'required',
            ]
        ];
    }
}
