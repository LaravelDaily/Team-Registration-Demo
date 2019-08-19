<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ContactCompany;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactCompanyRequest;
use App\Http\Requests\UpdateContactCompanyRequest;
use App\Http\Resources\Admin\ContactCompanyResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactCompanyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactCompanyResource(ContactCompany::with(['team'])->get());
    }

    public function store(StoreContactCompanyRequest $request)
    {
        $contactCompany = ContactCompany::create($request->all());
        $contactCompany->team()->sync($request->input('team', []));

        return (new ContactCompanyResource($contactCompany))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactCompanyResource($contactCompany->load(['team']));
    }

    public function update(UpdateContactCompanyRequest $request, ContactCompany $contactCompany)
    {
        $contactCompany->update($request->all());
        $contactCompany->team()->sync($request->input('team', []));

        return (new ContactCompanyResource($contactCompany))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactCompany->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
