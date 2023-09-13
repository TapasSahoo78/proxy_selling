<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Admin\CouponContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CouponController extends BaseController
{
    private $CouponContract;

    public function __construct(CouponContract $CouponContract)
    {
        $this->CouponContract = $CouponContract;
    }
    protected $rules = [
        'code' => 'required|unique:coupons',
        'discount' => 'required|numeric',
        'expires_at' => 'nullable|date',
        'usage_limit' => 'integer|min:1',
        'used_count' => 'integer|min:0',
    ];

    public function listCoupon()
    {
        $data = $this->CouponContract->allCoupons();
        return view('admin.pages.coupon.list', compact('data'));
    }
    public function storeCoupon(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return $this->responseJson(false, 200, $validator->errors()->first(), '', '');
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);

                $result = $this->CouponContract->storeCoupon($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return $this->responseJson(true, 200, 'Coupon added Successfully', '', route('admin.coupon.list'));
                } else {
                    return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
            }
        }
        $couponCode = generateCouponCode();
        return view('admin.pages.coupon.add', compact('couponCode'));
    }
    public function editCoupon()
    {
    }
    public function deleteCoupon()
    {
    }
}
