<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){
            return [
                'code' => 'required|unique:coupons,code',
                'type' => 'required',
                'value' => 'required',
                'cart_value' => 'required',
                'expiry_date' => 'required',
            ];
        }else{
            return [
                'code' => 'required',
                'type' => 'required',
                'value' => 'required',
                'cart_value' => 'required',
                'expiry_date' => 'required',
            ];
        }

    }
}
