<?php

namespace App\Http\Requests;

use App\Lease;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLeaseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lease_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
        ];

    }
}
