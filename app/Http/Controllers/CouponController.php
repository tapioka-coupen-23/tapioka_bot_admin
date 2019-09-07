<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    public function detail(Coupon $coupon)
    {
        return view('coupons.detail', ['coupon' => $coupon]);
    }
}
