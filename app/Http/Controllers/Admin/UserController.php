<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser()
    {
        return view('admin.pages.user.list');
    }
    public function storeUser()
    {
    }
    public function editUser()
    {
    }
    public function deleteUser()
    {
    }
}
