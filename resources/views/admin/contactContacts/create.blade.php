@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.contactContact.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.contact-contacts.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('company_id') ? 'has-error' : '' }}">
                            <label for="company">{{ trans('cruds.contactContact.fields.company') }}*</label>
                            <select name="company_id" id="company" class="form-control select2" required>
                                @foreach($companies as $id => $company)
                                    <option value="{{ $id }}" {{ (isset($contactContact) && $contactContact->company ? $contactContact->company->id : old('company_id')) == $id ? 'selected' : '' }}>{{ $company }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('company_id'))
                                <p class="help-block">
                                    {{ $errors->first('company_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('contact_first_name') ? 'has-error' : '' }}">
                            <label for="contact_first_name">{{ trans('cruds.contactContact.fields.contact_first_name') }}</label>
                            <input type="text" id="contact_first_name" name="contact_first_name" class="form-control" value="{{ old('contact_first_name', isset($contactContact) ? $contactContact->contact_first_name : '') }}">
                            @if($errors->has('contact_first_name'))
                                <p class="help-block">
                                    {{ $errors->first('contact_first_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_first_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_last_name') ? 'has-error' : '' }}">
                            <label for="contact_last_name">{{ trans('cruds.contactContact.fields.contact_last_name') }}</label>
                            <input type="text" id="contact_last_name" name="contact_last_name" class="form-control" value="{{ old('contact_last_name', isset($contactContact) ? $contactContact->contact_last_name : '') }}">
                            @if($errors->has('contact_last_name'))
                                <p class="help-block">
                                    {{ $errors->first('contact_last_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_last_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_phone_1') ? 'has-error' : '' }}">
                            <label for="contact_phone_1">{{ trans('cruds.contactContact.fields.contact_phone_1') }}</label>
                            <input type="text" id="contact_phone_1" name="contact_phone_1" class="form-control" value="{{ old('contact_phone_1', isset($contactContact) ? $contactContact->contact_phone_1 : '') }}">
                            @if($errors->has('contact_phone_1'))
                                <p class="help-block">
                                    {{ $errors->first('contact_phone_1') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_phone_1_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_phone_2') ? 'has-error' : '' }}">
                            <label for="contact_phone_2">{{ trans('cruds.contactContact.fields.contact_phone_2') }}</label>
                            <input type="text" id="contact_phone_2" name="contact_phone_2" class="form-control" value="{{ old('contact_phone_2', isset($contactContact) ? $contactContact->contact_phone_2 : '') }}">
                            @if($errors->has('contact_phone_2'))
                                <p class="help-block">
                                    {{ $errors->first('contact_phone_2') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_phone_2_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_email') ? 'has-error' : '' }}">
                            <label for="contact_email">{{ trans('cruds.contactContact.fields.contact_email') }}</label>
                            <input type="text" id="contact_email" name="contact_email" class="form-control" value="{{ old('contact_email', isset($contactContact) ? $contactContact->contact_email : '') }}">
                            @if($errors->has('contact_email'))
                                <p class="help-block">
                                    {{ $errors->first('contact_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_email_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_skype') ? 'has-error' : '' }}">
                            <label for="contact_skype">{{ trans('cruds.contactContact.fields.contact_skype') }}</label>
                            <input type="text" id="contact_skype" name="contact_skype" class="form-control" value="{{ old('contact_skype', isset($contactContact) ? $contactContact->contact_skype : '') }}">
                            @if($errors->has('contact_skype'))
                                <p class="help-block">
                                    {{ $errors->first('contact_skype') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_skype_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('contact_address') ? 'has-error' : '' }}">
                            <label for="contact_address">{{ trans('cruds.contactContact.fields.contact_address') }}</label>
                            <input type="text" id="contact_address" name="contact_address" class="form-control" value="{{ old('contact_address', isset($contactContact) ? $contactContact->contact_address : '') }}">
                            @if($errors->has('contact_address'))
                                <p class="help-block">
                                    {{ $errors->first('contact_address') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_address_helper') }}
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