<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('test');
    }

    public function private()
    {
        if (Gate::allows('admin-only', auth()->user())) {
            return view('private');
        } else {
            abort(403);
        }
    }
}
