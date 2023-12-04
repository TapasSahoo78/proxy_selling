<?php

namespace App\Http\Controllers\Admin\Proxy;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Admin\Proxy\CountryContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    private $CountryContract;

    public function __construct(CountryContract $CountryContract)
    {
        $this->CountryContract = $CountryContract;
    }
    protected $rules = [
        'name' => 'required|unique:categories|string|min:3|max:100',
        'description' => 'required|string|min:10|max:255',
    ];

    public function storeCountry(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return $this->responseJson(false, 200, $validator->errors()->first(), '', '');
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);

                $result = $this->CountryContract->storeCountry($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return $this->responseJson(true, 200, 'Country added Successfully', '', route('admin.country.list'));
                } else {
                    return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
            }
        }
        return view('admin.pages.country.add');
    }
    public function listCountry()
    {
        $data = $this->CountryContract->allCountries();
        return view('admin.pages.country.list', compact('data'));
    }
    public function editCountry()
    {
        return view('admin.pages.country.edit');
    }
    public function deleteCountry()
    {
    }
}
