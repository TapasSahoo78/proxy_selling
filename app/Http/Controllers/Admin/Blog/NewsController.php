<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\BaseController;
use App\Repositories\Contracts\Admin\Blog\NewsContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsController extends BaseController
{
    private $NewsContract;

    public function __construct(NewsContract $NewsContract)
    {
        $this->NewsContract = $NewsContract;
    }
    protected $rules = [
        'blog_category_id' => 'required',
        'title' => 'required|unique:blogs|string|min:3|max:200',
        'description' => 'required|string|min:10',
    ];

    public function storeNews(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return $this->responseJson(false, 200, $validator->errors()->first(), '', '');
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);
                $insert_array['admin_id'] = Auth::guard('admin')->user()->id;

                $result = $this->NewsContract->storeNews($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return $this->responseJson(true, 200, 'Blog added Successfully', '', route('admin.news.list'));
                } else {
                    return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
            }
        }
        return view('admin.pages.blog.news.add');
    }
    public function listNews()
    {
        $data = $this->NewsContract->allNews();
        return view('admin.pages.blog.news.list', compact('data'));
    }
    public function editNews()
    {
        return view('admin.pages.blog.news.edit');
    }
    public function deleteNews()
    {
    }
}
