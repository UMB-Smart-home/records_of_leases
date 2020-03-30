<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeleaseRequest;
use App\Http\Requests\UpdateTypeleaseRequest;
use App\Http\Resources\Admin\TypeleaseResource;
use App\Typelease;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeleasesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('typelease_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypeleaseResource(Typelease::all());

    }

    public function store(StoreTypeleaseRequest $request)
    {
        $typelease = Typelease::create($request->all());

        return (new TypeleaseResource($typelease))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(Typelease $typelease)
    {
        abort_if(Gate::denies('typelease_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypeleaseResource($typelease);

    }

    public function update(UpdateTypeleaseRequest $request, Typelease $typelease)
    {
        $typelease->update($request->all());

        return (new TypeleaseResource($typelease))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);

    }

    public function destroy(Typelease $typelease)
    {
        abort_if(Gate::denies('typelease_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typelease->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
