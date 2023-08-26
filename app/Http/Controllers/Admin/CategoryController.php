<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function storeCategory()
    {
        return view('admin.pages.category.add');
    }
    public function listCategory()
    {
        return view('admin.pages.category.list');
    }
    public function editCategory()
    {
        return view('admin.pages.category.edit');
    }
    public function deleteCategory()
    {
    }
}
