<?php

namespace App\Repositories\Contracts\Auth;

interface AuthContract
{
    public function signup();
    public function login(array $data, $model, $guard);
    public function logout($guard);
}
