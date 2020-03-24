<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOwnerRequest;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Owner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owners = Owner::all();

        return view('admin.owners.index', compact('owners'));
    }

    public function create()
    {
        abort_if(Gate::denies('owner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.owners.create');
    }

    public function store(StoreOwnerRequest $request)
    {
        $owner = Owner::create($request->all());

        return redirect()->route('admin.owners.index');
    }

    public function edit(Owner $owner)
    {
        abort_if(Gate::denies('owner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.owners.edit', compact('owner'));
    }

    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $owner->update($request->all());

        return redirect()->route('admin.owners.index');
    }

    public function show(Owner $owner)
    {
        abort_if(Gate::denies('owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.owners.show', compact('owner'));
    }

    public function destroy(Owner $owner)
    {
        abort_if(Gate::denies('owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owner->delete();

        return back();
    }

    public function massDestroy(MassDestroyOwnerRequest $request)
    {
        Owner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
