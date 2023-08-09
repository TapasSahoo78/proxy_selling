<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpManagerController extends Controller
{
    public function listEmpManager(){
        return view('admin.pages.empManager.list');
    }
    public function showEmpManager()
    {
        return view('admin.pages.empManager.add');
    }

}
