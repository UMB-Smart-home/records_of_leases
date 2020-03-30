@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.typeproperty.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.typeproperties.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('typ_bytu') ? 'has-error' : '' }}">
                            <label class="required" for="typ_bytu">{{ trans('cruds.typeproperty.fields.typ_bytu') }}</label>
                            <input class="form-control" type="text" name="typ_bytu" id="typ_bytu" value="{{ old('typ_bytu', '') }}" required>
                            @if($errors->has('typ_bytu'))
                                <span class="help-block" role="alert">{{ $errors->first('typ_bytu') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.typeproperty.fields.typ_bytu_helper') }}</span>
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