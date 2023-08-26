<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'discount', 'expires_at', 'usage_limit', 'used_count'];

    public function isValid()
    {
        if ($this->expires_at && now() > $this->expires_at) {
            return false; // Coupon has expired
        }

        if ($this->usage_limit !== null && $this->used_count >= $this->usage_limit) {
            return false; // Coupon usage limit reached
        }

        return true;
    }

    //Call in controller
    // if ($coupon->isValid()) {
    //     $discountedAmount = $orderTotal * ($coupon->discount / 100);
    //     $coupon->used_count += 1;
    //     $coupon->save();
    //     // Apply the discount to the order total
    // }
}
