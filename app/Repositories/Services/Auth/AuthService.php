<?php

namespace App\Repositories\Services\Auth;

use App\Models\Admin;
use App\Repositories\Contracts\Auth\AuthContract;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthContract
{
    public function signup()
    {
        return "signup";
    }
    public function login(array $request, $model, $guard)
    {
        // dd($model);
        $userCredentials = array(

            'email' => $request['email'],

            'password' => $request['password'],

            );

        $user = $model::where('name', $request['email'])->first();

        if (empty($user)) {
            $user = $model::where('email', $request['email'])->first();
        }

        $remember = $request['remember_me'] ? true : false;

        $login = Auth::guard($guard)->attempt($userCredentials, $remember);

        if ($login) {
            return true;
        }
    }
    public function logout($guard)
    {
        $logout = Auth::guard($guard)->logout();
        return $logout;
    }
}
