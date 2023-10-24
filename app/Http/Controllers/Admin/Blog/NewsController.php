<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\BaseController;
use App\Repositories\Contracts\Admin\Blog\NewsContract;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    private $NewsContract;

    public function __construct(NewsContract $NewsContract)
    {
        $this->NewsContract = $NewsContract;
    }
    protected $rules = [
        'name' => 'required|unique:categories|string|min:3|max:100',
        'description' => 'required|string|min:10|max:255',
    ];
}
