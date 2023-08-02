<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coupons\CreateCouponRequest;
use App\Http\Requests\Coupons\UpdateCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $coupon;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function index()
    {
        $coupons = $this->coupon->latest('id')->paginate(5);

        return view('Admin.coupons.index', ['data'=> $coupons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCouponRequest $request)
    {
        $dataCreate = $request->all();
        
        $this->coupon->create($dataCreate);
       
        return to_route('coupons.index')->with(['message'=>'Created Coupons Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon = $this->coupon->findOrFail($id);

        return view('Admin.coupons.edit', ['data'=> $coupon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponRequest $request,$id)
    {
        $coupon = $this->coupon->findOrFail($id);

        $dataUpdate = $request->all();

        $coupon->update($dataUpdate);
        return to_route('coupons.index')->with(['message'=> 'Update Coupon Success']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return to_route('coupons.index')->with(['message'=>'Deleted Coupon Success']);
    }
}
