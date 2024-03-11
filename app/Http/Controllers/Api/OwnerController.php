<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return Owner::all();

    }

    public function store(Request $request)
    {
        return Owner::create($request->all());
    }

    public function show(Owner $owner)
    {
        return $owner;
    }

    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());
        return $owner;
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response()->json(null, 204);
    }
}
