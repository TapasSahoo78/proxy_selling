<?php

namespace App\Repositories\Services\Admin\Proxy;

use App\Repositories\Contracts\Admin\Proxy\CountryContract;
use App\Models\Country as SELF_MODEL;

class CountryService implements CountryContract
{

    public function allCountries()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeCountry($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findCountry($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateCountry($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyCountry($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
