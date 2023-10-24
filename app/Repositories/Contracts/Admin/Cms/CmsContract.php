<?php

namespace App\Repositories\Contracts\Admin\Cms;

interface CmsContract
{
    public function allCms();
    public function storeCms(array $data);
    public function findCms($id);
    public function updateCms(array $data, $id);
    public function destroyCms($id);
}
