<?php

namespace App\Repositories\Services\Admin;

use App\Repositories\Contracts\Admin\CmsContract;
use App\Models\Category as SELF_MODEL;

class CmsService implements CmsContract
{

    public function allCms()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeCms($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findCms($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateCms($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyCms($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
