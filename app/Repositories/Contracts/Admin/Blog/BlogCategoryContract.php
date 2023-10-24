<?php

namespace App\Repositories\Contracts\Admin\Blog;

interface BlogCategoryContract
{
    public function allCategories();
    public function storeCategory(array $data);
    public function findCategory($id);
    public function updateCategory(array $data, $id);
    public function destroyCategory($id);
}
