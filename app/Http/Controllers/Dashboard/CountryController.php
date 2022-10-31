<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DefultRequest;
use App\Repositories\Sql\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $countryRepo;
    public function __construct(CountryRepository $countryRepo)
    {
       $this->countryRepo = $countryRepo;
    }
    public function index()
    {
        $countries = $this->countryRepo->getAll() ;
        return view('dashboard.backend.countries.index' , compact('countries'));
    }


    public function create()
    {
         return view('dashboard.backend.countries.create');
    }


    public function store(DefultRequest $request)
    {
       $data = $request->all();

       $this->countryRepo->create($data);

      return redirect(route('admin.countries.index'))->with('success', __('models.added_successfully'));


    }





    public function edit($id)
    {
        $country = $this->countryRepo->findOne($id);
         return view('dashboard.backend.countries.edit' , compact('country'));
    }


    public function update(DefultRequest $request, $id)
    {
       $country = $this->countryRepo->findOne($id);
       $data = $request->all();
       $country->update($data);
       return redirect(route('admin.countries.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $country = $this->countryRepo->findOne($id)->delete();
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
