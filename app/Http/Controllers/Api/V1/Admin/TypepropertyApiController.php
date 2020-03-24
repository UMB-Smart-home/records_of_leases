<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypepropertyRequest;
use App\Http\Requests\UpdateTypepropertyRequest;
use App\Http\Resources\Admin\TypepropertyResource;
use App\Typeproperty;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypepropertyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('typeproperty_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypepropertyResource(Typeproperty::all());

    }

    public function store(StoreTypepropertyRequest $request)
    {
        $typeproperty = Typeproperty::create($request->all());

        return (new TypepropertyResource($typeproperty))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(Typeproperty $typeproperty)
    {
        abort_if(Gate::denies('typeproperty_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypepropertyResource($typeproperty);

    }

    public function update(UpdateTypepropertyRequest $request, Typeproperty $typeproperty)
    {
        $typeproperty->update($request->all());

        return (new TypepropertyResource($typeproperty))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);

    }

    public function destroy(Typeproperty $typeproperty)
    {
        abort_if(Gate::denies('typeproperty_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeproperty->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
