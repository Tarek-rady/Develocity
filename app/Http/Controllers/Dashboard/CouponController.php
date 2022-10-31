<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CouponRequest;
use App\Repositories\Sql\CouponRepository;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    protected $couponRepo;
    public function __construct(CouponRepository $couponRepo)
    {
      $this->couponRepo = $couponRepo ;
    }

    public function index()
    {
        $coupons = $this->couponRepo->getAll();
        return view('dashboard.backend.coupons.index' , compact('coupons'));

    }


    public function create()
    {
        return view('dashboard.backend.coupons.create');

    }


    public function store(CouponRequest $request)
    {
        $data = $request->all();

        $this->couponRepo->create($data);
        return redirect(route('admin.coupons.index'))->with('success', __('models.added_successfully'));

    }


    public function edit($id)
    {
        $coupon = $this->couponRepo->findOne($id);
        return view('dashboard.backend.coupons.edit' , compact('coupon'));

    }


    public function update(CouponRequest $request, $id)
    {
        $coupon = $this->couponRepo->findOne($id);
        $data = $request->all();
        $coupon->update($data);
        return redirect(route('admin.coupons.index'))->with('success', __('models.added_successfully'));
    }


    public function destroy($id)
    {
        $coupon = $this->couponRepo->findOne($id);
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);


    }
}
