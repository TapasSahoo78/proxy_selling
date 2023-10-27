<?php

namespace App\Repositories\Contracts\Admin\Blog;

interface NewsContract
{
    public function allNews();
    public function storeNews(array $data);
    public function findNews($id);
    public function updateNews(array $data, $id);
    public function destroyNews($id);
}
