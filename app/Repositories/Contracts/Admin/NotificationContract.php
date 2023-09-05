<?php

namespace App\Repositories\Contracts\Admin;

interface NotificationContract
{
    public function allNotifications();
    public function storeNotification(array $data);
    public function findNotification($id);
    public function updateNotification(array $data, $id);
    public function destroyNotification($id);
}
