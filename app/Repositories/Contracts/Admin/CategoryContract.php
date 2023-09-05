<?php

namespace App\Repositories\Contracts\Admin;

interface CategoryContract
{
    public function allCategories();
    public function storeCategory(array $data);
    public function findCategory($id);
    public function updateCategory(array $data, $id);
    public function destroyCategory($id);
}
