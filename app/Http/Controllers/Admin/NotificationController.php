<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function listNotification()
    {
    }
    public function storeNotification()
    {
        return view('admin.pages.notification.add');
    }
    public function editNotification()
    {
    }
    public function deleteNotification()
    {
    }
}
