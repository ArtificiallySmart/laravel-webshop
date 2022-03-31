<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $allUsers = User::with('Address', 'phoneNumber')->paginate(20);
        return view('admin.users', ['allUsers' => $allUsers]);
    }
    public function user(User $user)
    {
        return view('admin.userdetails', ['user' => $user->load('Address', 'phoneNumber')]);
    }

    public function updateUser(User $user, Request $request)
    {
        $user->update($request->all());
        $user->address->update($request->all());
        $user->phoneNumber->update($request->all());
        return redirect()->route('admin-users');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin-users');
    }
}
