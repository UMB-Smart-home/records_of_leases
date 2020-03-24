@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.lease.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.leases.update", [$lease->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('adresa') ? 'has-error' : '' }}">
                            <label for="adresa">{{ trans('cruds.lease.fields.adresa') }}</label>
                            <input class="form-control" type="text" name="adresa" id="adresa" value="{{ old('adresa', $lease->adresa) }}">
                            @if($errors->has('adresa'))
                                <span class="help-block" role="alert">{{ $errors->first('adresa') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lease.fields.adresa_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('typ_bytu') ? 'has-error' : '' }}">
                            <label for="typ_bytu_id">{{ trans('cruds.lease.fields.typ_bytu') }}</label>
                            <select class="form-control select2" name="typ_bytu_id" id="typ_bytu_id">
                                @foreach($typ_bytus as $id => $typ_bytu)
                                    <option value="{{ $id }}" {{ ($lease->typ_bytu ? $lease->typ_bytu->id : old('typ_bytu_id')) == $id ? 'selected' : '' }}>{{ $typ_bytu }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('typ_bytu'))
                                <span class="help-block" role="alert">{{ $errors->first('typ_bytu') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lease.fields.typ_bytu_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection