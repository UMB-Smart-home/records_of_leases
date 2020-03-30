<?php

namespace App\Http\Requests;

use App\Owner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateOwnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('owner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'    => [
                'max:50',
                'required'],
            'surname' => [
                'max:100',
                'required'],
        ];
    }
}
