@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.owner.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.owners.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.owner.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.owner.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
                            <label class="required" for="surname">{{ trans('cruds.owner.fields.surname') }}</label>
                            <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', '') }}" required>
                            @if($errors->has('surname'))
                                <span class="help-block" role="alert">{{ $errors->first('surname') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.owner.fields.surname_helper') }}</span>
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