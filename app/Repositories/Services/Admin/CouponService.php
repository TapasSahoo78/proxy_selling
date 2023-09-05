<?php

namespace App\Repositories\Services\Admin;

use App\Repositories\Contracts\Admin\CouponContract;
use App\Models\Coupon as SELF_MODEL;

class CouponService implements CouponContract
{

    public function allCoupons()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeCoupon($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findCoupon($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateCoupon($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyCoupon($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
