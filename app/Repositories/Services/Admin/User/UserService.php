<?php

namespace App\Repositories\Services\Admin\User;

use App\Repositories\Contracts\Admin\CategoryContract;
use App\Models\Category as SELF_MODEL;
use App\Repositories\Contracts\Admin\User\UserContract;

class UserService implements UserContract
{

    public function allUsers()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeUser($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findUser($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateUser($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyUser($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
