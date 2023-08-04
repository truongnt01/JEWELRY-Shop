<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function index(){
        $orders = $this->order->getWithPaginateBy(auth()->user()->id);
        return view('admin.orders.index',['data'=> $orders]);
    }

    public function updateStatus(Request $request, $id){
        $order = $this->order->findOrFail($id);
        $order->update(['status'=> $request->status]);
        return response()->json([
            'message' => 'success'
        ], Response::HTTP_OK);
    }
}
