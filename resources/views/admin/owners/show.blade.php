@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.owner.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.owners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.owner.fields.id') }}
                        </th>
                        <td>
                            {{ $owner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.owner.fields.name') }}
                        </th>
                        <td>
                            {{ $owner->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.owner.fields.surname') }}
                        </th>
                        <td>
                            {{ $owner->surname }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.owners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection