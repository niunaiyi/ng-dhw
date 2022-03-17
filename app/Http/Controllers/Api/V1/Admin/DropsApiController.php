<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\DropResource;
use App\Models\Drop;
use Gate;
use Illuminate\Http\Response;

class DropsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('drop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DropResource(Drop::with(['type', 'address', 'customer', 'device'])->advancedFilter());
    }

    public function show(Drop $drop)
    {
        abort_if(Gate::denies('drop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return new DropResource($drop->load(['type', 'address', 'customer', 'device']));
    }

    public function destroy(Drop $drop)
    {
        abort_if(Gate::denies('drop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $drop->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
