<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Favourite;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {

        $admins = User::count();
       $users = Customer::count();
       $categories = Category::count();
       $tags = Tag::count();
       $poducts = Product::count();
       $Countries = Country::count();
       $cities = City::count();
       $favs = Favourite::count();
       $orders = Order::count();
       $orders_waiting = Order::where('status' , 'waiting')->count();
       $orders_completed = Order::where('status' , 'completed')->count();
       $orders_canceld = Order::where('status' , 'canceld')->count();



        return view('dashboard.home' , compact('admins' , 'users' , 'categories' , 'tags' ,
                    'poducts' , 'Countries' , 'cities' , 'orders' , 'favs' ,
                    'orders_waiting' , 'orders_completed' , 'orders_canceld')
        );

    }

}
