<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function getProfile()
    {
        $user = User::find(Auth::id());
        echo json_encode(
            [
                'success' => true,
                'user' => $user,
                'address' => $user->address,
                'phoneNumber' => $user->phoneNumber
            ]
        );
    }

    public function createProfile(Request $request)
    {
        $user = User::find(Auth::id());
        if (!$user->address) $user->address()->create($request->toArray());
        if (!$user->phoneNumber) $user->phoneNumber()->create($request->toArray());
    }

    public function editProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->update($request->toArray());
        $user->address->update($request->toArray());
        $user->phoneNumber->update($request->toArray());
    }

    public function deleteProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->email = "deleted";
        $user->password = "deleted";
        $user->save();
        $user->delete();
    }
}
