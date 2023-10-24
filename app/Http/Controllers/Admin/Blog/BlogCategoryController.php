<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\BaseController;
use App\Repositories\Contracts\Admin\Blog\BlogCategoryContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends BaseController
{
    private $BlogCategoryContract;

    public function __construct(BlogCategoryContract $BlogCategoryContract)
    {
        $this->BlogCategoryContract = $BlogCategoryContract;
    }
    protected $rules = [
        'name' => 'required|unique:categories|string|min:3|max:100',
        'description' => 'required|string|min:10|max:255',
    ];

    public function storeCategory(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return $this->responseJson(false, 200, $validator->errors()->first(), '', '');
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);

                $result = $this->BlogCategoryContract->storeCategory($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return $this->responseJson(true, 200, 'Category added Successfully', '', route('admin.category.list'));
                } else {
                    return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
            }
        }
        return view('admin.pages.proxy.category.add');
    }
    public function listCategory()
    {
        $data = $this->BlogCategoryContract->allCategories();
        return view('admin.pages.proxy.category.list', compact('data'));
    }
    public function editCategory()
    {
        return view('admin.pages.proxy.category.edit');
    }
    public function deleteCategory()
    {
    }
}
