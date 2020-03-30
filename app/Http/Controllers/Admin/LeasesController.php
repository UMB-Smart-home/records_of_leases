<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLeaseRequest;
use App\Http\Requests\StoreLeaseRequest;
use App\Http\Requests\UpdateLeaseRequest;
use App\Lease;
use App\Typeproperty;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeasesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lease_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leases = Lease::all();

        return view('admin.leases.index', compact('leases'));
    }

    public function create()
    {
        abort_if(Gate::denies('lease_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typ_bytus = Typeproperty::all()->pluck('typ_bytu', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leases.create', compact('typ_bytus'));
    }

    public function store(StoreLeaseRequest $request)
    {
        $lease = Lease::create($request->all());

        return redirect()->route('admin.leases.index');

    }

    public function edit(Lease $lease)
    {
        abort_if(Gate::denies('lease_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typ_bytus = Typeproperty::all()->pluck('typ_bytu', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lease->load('typ_bytu');

        return view('admin.leases.edit', compact('typ_bytus', 'lease'));
    }

    public function update(UpdateLeaseRequest $request, Lease $lease)
    {
        $lease->update($request->all());

        return redirect()->route('admin.leases.index');

    }

    public function show(Lease $lease)
    {
        abort_if(Gate::denies('lease_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lease->load('typ_bytu');

        return view('admin.leases.show', compact('lease'));
    }

    public function destroy(Lease $lease)
    {
        abort_if(Gate::denies('lease_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lease->delete();

        return back();

    }

    public function massDestroy(MassDestroyLeaseRequest $request)
    {
        Lease::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
