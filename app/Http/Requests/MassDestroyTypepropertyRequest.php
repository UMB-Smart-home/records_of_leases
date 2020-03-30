<?php

namespace App\Http\Requests;

use App\Typeproperty;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTypepropertyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('typeproperty_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:typeproperties,id',
        ];

    }
}
