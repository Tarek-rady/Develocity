<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Repositories\Sql\FavouriteRepository;
use App\Repositories\Sql\ProductRepository;
use App\Repositories\Sql\UserRepository;

class FavouriteController extends Controller
{
    protected $userRepo , $productRepo , $favRepo ;

    public function __construct( FavouriteRepository $favRepo)
    {

        $this->favRepo = $favRepo ;
    }

    public function index()
    {
        $favs = $this->favRepo->getAll();
        return view('dashboard.backend.favourites.index' , compact('favs'));

    }
}
