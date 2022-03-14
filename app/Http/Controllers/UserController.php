<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function getProfile()
    {
        $user = User::find(Auth::id());
        $user->address;
        $user->phoneNumber;
        echo json_encode(
            [
                'success' => true,
                'user' => $user,
            ]
        );
    }

    public function createProfile()
    {
    }
}
