<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Repositories\Sql\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepo;
    public function __construct(OrderRepository $orderRepo)
    {
         $this->orderRepo = $orderRepo ;
    }
    public function orders()
    {
       $orders = $this->orderRepo->getAll();
       return view('dashboard.backend.orders.index' , compact('orders'));

    }

    public function show($id)
    {
        $order = $this->orderRepo->findOne($id);
        $items = $order->items;


        return view('dashboard.backend.orders.show' , compact('order' , 'items'));
    }

    public function update_status(Request $request , $id)
    {
        $order = $this->orderRepo->findOne($id);

        if($request->status == 'completed'){
            $order->update([
                'status' =>  $request->status ,
                'date_completed' => now()
            ]);
            return redirect(route('admin.orders.index'))->with('success', __('updated_successfully._successfully'));

        }else{
            $order->update([
                'status' =>  $request->status ,
                'date_canceld' => now()
            ]);

            $order->delete();
            return redirect(route('admin.orders.index'))->with('success', __('models.updated_successfully'));

        }




    }

    public function order_waiting()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'waiting']);
        return view('dashboard.backend.orders.waiting' , compact('orders'));

    }

    public function order_completed()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'completed']);
        return view('dashboard.backend.orders.waiting' , compact('orders'));

    }


    public function order_canceld()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'canceld']);
        return view('dashboard.backend.orders.waiting' , compact('orders'));

    }

}
