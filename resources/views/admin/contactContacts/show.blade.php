@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contactContact.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.company') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->company->company_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_first_name') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_last_name') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_email') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_skype') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_skype }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_address') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_address }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection