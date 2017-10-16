<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,User};

class UserController extends Controller
{
    public function role_edit(User $user)
    {
        $roles = Role::get();
        return view('profile.edit')->with('user', $user)->with('roles', $roles);
    }

    public function role_save(Request $request, User $user)
    {
        $user->roles()->detach();
        if (is_array($request->role)) {
            foreach ($request->role as $role => $v) {
                if ($role = Role::where('name', '=', $role)->firstOrFail()) {
                    $user->roles()->attach($role);
                }
            }
        }
        return redirect()->back();
    }
}
