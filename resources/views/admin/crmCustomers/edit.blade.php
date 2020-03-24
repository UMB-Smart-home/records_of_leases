@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.crmCustomer.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.crm-customers.update", [$crmCustomer->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label class="required" for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', $crmCustomer->first_name) }}" required>
                            @if($errors->has('first_name'))
                                <span class="help-block" role="alert">{{ $errors->first('first_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">{{ trans('cruds.crmCustomer.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $crmCustomer->last_name) }}">
                            @if($errors->has('last_name'))
                                <span class="help-block" role="alert">{{ $errors->first('last_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label class="required" for="status_id">{{ trans('cruds.crmCustomer.fields.status') }}</label>
                            <select class="form-control select2" name="status_id" id="status_id" required>
                                @foreach($statuses as $id => $status)
                                    <option value="{{ $id }}" {{ ($crmCustomer->status ? $crmCustomer->status->id : old('status_id')) == $id ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.crmCustomer.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $crmCustomer->email) }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.crmCustomer.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $crmCustomer->phone) }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address">{{ trans('cruds.crmCustomer.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $crmCustomer->address) }}">
                            @if($errors->has('address'))
                                <span class="help-block" role="alert">{{ $errors->first('address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('skype') ? 'has-error' : '' }}">
                            <label for="skype">{{ trans('cruds.crmCustomer.fields.skype') }}</label>
                            <input class="form-control" type="text" name="skype" id="skype" value="{{ old('skype', $crmCustomer->skype) }}">
                            @if($errors->has('skype'))
                                <span class="help-block" role="alert">{{ $errors->first('skype') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.skype_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="website">{{ trans('cruds.crmCustomer.fields.website') }}</label>
                            <input class="form-control" type="text" name="website" id="website" value="{{ old('website', $crmCustomer->website) }}">
                            @if($errors->has('website'))
                                <span class="help-block" role="alert">{{ $errors->first('website') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.website_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.crmCustomer.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description">{{ old('description', $crmCustomer->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.description_helper') }}</span>
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