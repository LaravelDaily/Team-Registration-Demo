<?php

namespace App\Http\Requests;

use App\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreContactContactRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'company_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
