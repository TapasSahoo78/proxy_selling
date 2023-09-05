<?php

namespace App\Repositories\Services\Admin;

use App\Repositories\Contracts\Admin\NotificationContract;
use App\Models\Category as SELF_MODEL;

class NotificationService implements NotificationContract
{

    public function allNotifications()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeNotification($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findNotification($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateNotification($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyNotification($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
