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
        $id = Auth::id();
        // $user = User::find($id);
        $user = User::with('address', 'phoneNumber', 'orders.orderProducts.product')->find($id);
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
        if ($user->address) $user->address->update($request->toArray());
        if ($user->phoneNumber) $user->phoneNumber->update($request->toArray());
    }

    public function deleteProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->delete();
    }
}
