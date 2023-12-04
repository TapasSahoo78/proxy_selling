<?php

namespace App\Repositories\Contracts\Admin\Proxy;

interface CountryContract
{
    public function allCountries();
    public function storeCountry(array $data);
    public function findCountry($id);
    public function updateCountry(array $data, $id);
    public function destroyCountry($id);
}
