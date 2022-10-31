<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;
use App\Repositories\Sql\CityRepository;
use App\Repositories\Sql\CountryRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $countryRepo , $cityRepo ;
    public function __construct(CountryRepository $countryRepo , CityRepository $cityRepo)
    {
       $this->cityRepo = $cityRepo ;
       $this->countryRepo = $countryRepo ;
    }
    public function index()
    {
        $cities = $this->cityRepo->getAll();
        return view('dashboard.backend.cities.index' , compact('cities'));
    }


    public function create()
    {
        $countries = $this->countryRepo->getAll();
         return view('dashboard.backend.cities.create' , compact('countries') );
    }


    public function store(CityRequest $request)
    {
       $data = $request->all();

       $this->cityRepo->create($data);

      return redirect(route('admin.cities.index'))->with('success', __('models.added_successfully'));


    }





    public function edit($id)
    {
         $city = $this->cityRepo->findOne($id);
         $countries = $this->countryRepo->getAll();
         return view('dashboard.backend.cities.edit' , compact('countries' , 'city'));
    }


    public function update(CityRequest $request, $id)
    {
      $city = $this->cityRepo->findOne($id);
       $data = $request->all();
       $city->update($data);
        return redirect(route('admin.cities.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $city = $this->cityRepo->findOne($id)->delete();
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
