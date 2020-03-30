@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.typelease.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.typeleases.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('typ_prenajmu') ? 'has-error' : '' }}">
                            <label for="typ_prenajmu">{{ trans('cruds.typelease.fields.typ_prenajmu') }}</label>
                            <input class="form-control" type="text" name="typ_prenajmu" id="typ_prenajmu" value="{{ old('typ_prenajmu', '') }}">
                            @if($errors->has('typ_prenajmu'))
                                <span class="help-block" role="alert">{{ $errors->first('typ_prenajmu') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.typelease.fields.typ_prenajmu_helper') }}</span>
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