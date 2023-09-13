<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
    public function listProxy()
    {
        $data = [];
        return view('admin.pages.proxy.list',compact('data'));
    }
    public function storeProxy()
    {
        return view('admin.pages.proxy.add');
    }
    public function editProxy()
    {
    }
    public function deleteProxy()
    {
    }
}
