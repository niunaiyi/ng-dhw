<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Resources\Admin\AddressResource;
use App\Models\Address;
use App\Models\Dict;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('address_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AddressResource(Address::with(['type'])->advancedFilter());
    }

    public function store(StoreAddressRequest $request)
    {
        $address = Address::create($request->validated());

        return (new AddressResource($address))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('address_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'type' => Dict::get(['id', 'name']),
            ],
        ]);
    }

    public function show(Address $address)
    {
        abort_if(Gate::denies('address_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AddressResource($address->load(['dict']));
    }

    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->validated());

        return (new AddressResource($address))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Address $address)
    {
        abort_if(Gate::denies('address_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new AddressResource($address->load(['roles'])),
            'meta' => [
                'type' => Dict::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(Address $address)
    {
        abort_if(Gate::denies('address_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $address->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
