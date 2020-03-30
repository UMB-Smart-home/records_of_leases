@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.typeproperty.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.typeproperties.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.typeproperty.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $typeproperty->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.typeproperty.fields.typ_bytu') }}
                                    </th>
                                    <td>
                                        {{ $typeproperty->typ_bytu }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.typeproperties.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.relatedData') }}
                </div>
                <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                    <li role="presentation">
                        <a href="#typ_bytu_leases" aria-controls="typ_bytu_leases" role="tab" data-toggle="tab">
                            {{ trans('cruds.lease.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="typ_bytu_leases">
                        @includeIf('admin.typeproperties.relationships.typBytuLeases', ['leases' => $typeproperty->typBytuLeases])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection