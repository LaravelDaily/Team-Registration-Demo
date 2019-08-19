<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ContactContact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactContactRequest;
use App\Http\Requests\UpdateContactContactRequest;
use App\Http\Resources\Admin\ContactContactResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactContactsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactContactResource(ContactContact::with(['company', 'team'])->get());
    }

    public function store(StoreContactContactRequest $request)
    {
        $contactContact = ContactContact::create($request->all());
        $contactContact->company()->sync($request->input('company', []));
        $contactContact->team()->sync($request->input('team', []));

        return (new ContactContactResource($contactContact))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactContactResource($contactContact->load(['company', 'team']));
    }

    public function update(UpdateContactContactRequest $request, ContactContact $contactContact)
    {
        $contactContact->update($request->all());
        $contactContact->company()->sync($request->input('company', []));
        $contactContact->team()->sync($request->input('team', []));

        return (new ContactContactResource($contactContact))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContact->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
