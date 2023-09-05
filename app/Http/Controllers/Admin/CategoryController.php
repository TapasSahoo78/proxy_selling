<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Admin\CategoryContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    private $CategoryContract;

    public function __construct(CategoryContract $CategoryContract)
    {
        $this->CategoryContract = $CategoryContract;
    }
    protected $rules = [
        'name' => 'required|string|min:3|max:100',
        'description' => 'required|string|min:10|max:255',
    ];

    public function storeCategory(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return response()->json(
                    [
                        'status'    => false,
                        'message'    => $validator->errors()->first(),
                        'redirect'    => ''
                    ],
                    200
                );
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);

                $result = $this->CategoryContract->storeCategory($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return response()->json(
                        [
                            'status'    => true,
                            'message'   => 'Category added Successfully!',
                            'redirect'  => route('admin.category.list')
                        ],
                        200
                    );
                } else {
                    return response()->json(
                        [
                            'status'    => false,
                            'message'   => 'Something went wrong!!',
                            'redirect'  => ''
                        ],
                        200
                    );
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return response()->json(
                    [
                        'status'    => false,
                        'message'   =>  'Something went wrong!!',
                        'redirect'  => ''
                    ],
                    200
                );
            }
        }
        return view('admin.pages.category.add');
    }
    public function listCategory()
    {
        $data = $this->CategoryContract->allCategories();
        return view('admin.pages.category.list', compact('data'));
    }
    public function editCategory()
    {
        return view('admin.pages.category.edit');
    }
    public function deleteCategory()
    {
    }
}
