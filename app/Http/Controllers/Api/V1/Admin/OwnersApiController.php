<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Resources\Admin\OwnerResource;
use App\Owner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OwnerResource(Owner::all());
    }

    public function store(StoreOwnerRequest $request)
    {
        $owner = Owner::create($request->all());

        return (new OwnerResource($owner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Owner $owner)
    {
        abort_if(Gate::denies('owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OwnerResource($owner);
    }

    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $owner->update($request->all());

        return (new OwnerResource($owner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Owner $owner)
    {
        abort_if(Gate::denies('owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
