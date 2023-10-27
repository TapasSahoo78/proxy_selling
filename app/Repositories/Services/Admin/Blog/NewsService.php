<?php

namespace App\Repositories\Services\Admin\Blog;

use App\Repositories\Contracts\Admin\Blog\NewsContract;
use App\Models\Blog as SELF_MODEL;

class NewsService implements NewsContract
{

    public function allNews()
    {
        return SELF_MODEL::with('category', 'admin')->latest()->paginate(10);
    }

    public function storeNews($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findNews($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateNews($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyNews($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
