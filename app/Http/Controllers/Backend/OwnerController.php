<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        $getOwner = Owner::paginate(10);
        return view('backend.owner.index', compact('getOwner'));
    }
}
