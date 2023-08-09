<?php

namespace App\Repositories\Services\Admin;

use App\Repositories\Contracts\Admin\EmployerContract;
use App\Models\Employer as SELF_MODEL;

class EmployerService implements EmployerContract
{

    public function allEmployers()
    {
        return SELF_MODEL::with('product_details')->latest()->get();
    }

    public function storeEmployer($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findEmployer($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateEmployer($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyEmployer($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
