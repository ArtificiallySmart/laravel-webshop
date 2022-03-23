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
}
