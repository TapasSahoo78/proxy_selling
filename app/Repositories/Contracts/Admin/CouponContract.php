<?php

namespace App\Repositories\Contracts\Admin;

interface CouponContract
{
    public function allCoupons();
    public function storeCoupon(array $data);
    public function findCoupon($id);
    public function updateCoupon(array $data, $id);
    public function destroyCoupon($id);
}
