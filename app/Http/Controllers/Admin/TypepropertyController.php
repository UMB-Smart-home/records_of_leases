<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTypepropertyRequest;
use App\Http\Requests\StoreTypepropertyRequest;
use App\Http\Requests\UpdateTypepropertyRequest;
use App\Typeproperty;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypepropertyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('typeproperty_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeproperties = Typeproperty::all();

        return view('admin.typeproperties.index', compact('typeproperties'));
    }

    public function create()
    {
        abort_if(Gate::denies('typeproperty_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeproperties.create');
    }

    public function store(StoreTypepropertyRequest $request)
    {
        $typeproperty = Typeproperty::create($request->all());

        return redirect()->route('admin.typeproperties.index');

    }

    public function edit(Typeproperty $typeproperty)
    {
        abort_if(Gate::denies('typeproperty_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeproperties.edit', compact('typeproperty'));
    }

    public function update(UpdateTypepropertyRequest $request, Typeproperty $typeproperty)
    {
        $typeproperty->update($request->all());

        return redirect()->route('admin.typeproperties.index');

    }

    public function show(Typeproperty $typeproperty)
    {
        abort_if(Gate::denies('typeproperty_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeproperty->load('typBytuLeases');

        return view('admin.typeproperties.show', compact('typeproperty'));
    }

    public function destroy(Typeproperty $typeproperty)
    {
        abort_if(Gate::denies('typeproperty_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeproperty->delete();

        return back();

    }

    public function massDestroy(MassDestroyTypepropertyRequest $request)
    {
        Typeproperty::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
