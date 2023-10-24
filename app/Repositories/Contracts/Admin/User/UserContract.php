<?php

namespace App\Repositories\Contracts\Admin\User;

interface UserContract
{
    public function allUsers();
    public function storeUser(array $data);
    public function findUser($id);
    public function updateUser(array $data, $id);
    public function destroyUser($id);
}
