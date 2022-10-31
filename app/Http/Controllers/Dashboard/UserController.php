<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repositories\Sql\CustomerRepository;
use App\Repositories\Sql\FavouriteRepository;
use App\Repositories\Sql\OrderRepository;
use App\Repositories\Sql\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo , $favRepo , $orderRepo;
    public function __construct(CustomerRepository $userRepo , FavouriteRepository $favRepo , OrderRepository $orderRepo )
    {
      $this->userRepo = $userRepo ;
      $this->favRepo = $favRepo ;
    }
    public function index()
    {
        $users = $this->userRepo->getAll();
        return view('dashboard.backend.users.index' , compact('users'));
    }


    public function show($id)
    {
        $user = $this->userRepo->findOne($id);
        $favs = $user->favourites;
        return view('dashboard.backend.users.favs' , compact('favs'));
    }

    public function orders($id)
    {
        $orders =Order::where('customer_id' , $id)->get();
        return view('dashboard.backend.users.orders' , compact('orders'));

    }

    public function destroy($id)
    {
        $user = $this->userRepo->findOne($id);
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
