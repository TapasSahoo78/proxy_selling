<?php

namespace App\Repositories\Services\Admin\Blog;

use App\Repositories\Contracts\Admin\Blog\BlogCategoryContract;
use App\Models\Category as SELF_MODEL;

class BlogCategoryService implements BlogCategoryContract
{

    public function allCategories()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeCategory($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findCategory($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateCategory($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyCategory($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
