<?php

namespace App\Repositories\Contracts\Admin;

interface EmployerContract
{
    public function allEmployers();
    public function storeEmployer(array $data);
    public function findEmployer($id);
    public function updateEmployer(array $data, $id);
    public function destroyEmployer($id);
}
