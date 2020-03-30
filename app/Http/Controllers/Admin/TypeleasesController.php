<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTypeleaseRequest;
use App\Http\Requests\StoreTypeleaseRequest;
use App\Http\Requests\UpdateTypeleaseRequest;
use App\Typelease;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeleasesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('typelease_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeleases = Typelease::all();

        return view('admin.typeleases.index', compact('typeleases'));
    }

    public function create()
    {
        abort_if(Gate::denies('typelease_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeleases.create');
    }

    public function store(StoreTypeleaseRequest $request)
    {
        $typelease = Typelease::create($request->all());

        return redirect()->route('admin.typeleases.index');

    }

    public function edit(Typelease $typelease)
    {
        abort_if(Gate::denies('typelease_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeleases.edit', compact('typelease'));
    }

    public function update(UpdateTypeleaseRequest $request, Typelease $typelease)
    {
        $typelease->update($request->all());

        return redirect()->route('admin.typeleases.index');

    }

    public function show(Typelease $typelease)
    {
        abort_if(Gate::denies('typelease_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeleases.show', compact('typelease'));
    }

    public function destroy(Typelease $typelease)
    {
        abort_if(Gate::denies('typelease_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typelease->delete();

        return back();

    }

    public function massDestroy(MassDestroyTypeleaseRequest $request)
    {
        Typelease::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
