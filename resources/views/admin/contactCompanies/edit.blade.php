@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.contactCompany.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.contact-companies.update", [$contactCompany->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                            <label for="company_name">{{ trans('cruds.contactCompany.fields.company_name') }}</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name', isset($contactCompany) ? $contactCompany->company_name : '') }}">
                            @if($errors->has('company_name'))
                                <p class="help-block">
                                    {{ $errors->first('company_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_address') ? 'has-error' : '' }}">
                            <label for="company_address">{{ trans('cruds.contactCompany.fields.company_address') }}</label>
                            <input type="text" id="company_address" name="company_address" class="form-control" value="{{ old('company_address', isset($contactCompany) ? $contactCompany->company_address : '') }}">
                            @if($errors->has('company_address'))
                                <p class="help-block">
                                    {{ $errors->first('company_address') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_address_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_website') ? 'has-error' : '' }}">
                            <label for="company_website">{{ trans('cruds.contactCompany.fields.company_website') }}</label>
                            <input type="text" id="company_website" name="company_website" class="form-control" value="{{ old('company_website', isset($contactCompany) ? $contactCompany->company_website : '') }}">
                            @if($errors->has('company_website'))
                                <p class="help-block">
                                    {{ $errors->first('company_website') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_website_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_email') ? 'has-error' : '' }}">
                            <label for="company_email">{{ trans('cruds.contactCompany.fields.company_email') }}</label>
                            <input type="text" id="company_email" name="company_email" class="form-control" value="{{ old('company_email', isset($contactCompany) ? $contactCompany->company_email : '') }}">
                            @if($errors->has('company_email'))
                                <p class="help-block">
                                    {{ $errors->first('company_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_email_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection