<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Models\StaticPage;
use App\Repositories\Sql\StaticPageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    protected $staticRepo;

    public function __construct(StaticPageRepository $staticRepo)
    {

         $this->staticRepo = $staticRepo;

    } // end of contruct

    public function create()
    {

        // $settings = $this->staticRepo->getAll(['column' => 'id', 'dir' => 'ASC']);

        $General_Terms = $this->staticRepo->getWhere(['key' => 'General_Terms']);
        $Cases_not_suitable_for_return = $this->staticRepo->getWhere(['key' => 'Cases_not_suitable_for_return']);
        $Cases_suitable_for_return = $this->staticRepo->getWhere(['key' => 'Cases_suitable_for_return']);
        $introduction_1 = $this->staticRepo->getWhere(['key' => 'introduction_1']);
        $register_and_login = $this->staticRepo->getWhere(['key' => 'register_and_login']);
        $orders_and_prices = $this->staticRepo->getWhere(['key' => 'Orders_and_prices']);
        $Property_rights = $this->staticRepo->getWhere(['key' => 'Property_rights']);
        $data_protection = $this->staticRepo->getWhere(['key' => 'data_protection']);

        $Application_of_laws = $this->staticRepo->getWhere(['key' => 'Application_of_laws']);
        $Cancellations = $this->staticRepo->getWhere(['key' => 'Cancellations']);
        $Security = $this->staticRepo->getWhere(['key' => 'Security']);
        $Introduction_2 = $this->staticRepo->getWhere(['key' => 'Introduction_2']);
        $Data_collection_and_sharing = $this->staticRepo->getWhere(['key' => 'Data_collection_and_sharing']);
        $third_party = $this->staticRepo->getWhere(['key' => 'third_party']);
        $Protection_of_personal_information = $this->staticRepo->getWhere(['key' => 'Protection_of_personal_information']);

        return
               view('dashboard.settings.edit' ,
               compact('General_Terms', 'Cases_not_suitable_for_return', 'Cases_suitable_for_return' ,
                       'introduction_1' , 'register_and_login' , 'orders_and_prices' , 'Property_rights' , 'data_protection' ,
                       'Application_of_laws' , 'Cancellations' , 'Security' , 'Introduction_2' ,
                       'Data_collection_and_sharing' , 'third_party' , 'Protection_of_personal_information'  ,

        ));

    } // end of create

    public function store(Request $request)
    {




        $attribute = $request->except('key' , 'title');

        $attribute['desc'] = $request->desc ;

        $this->staticRepo->updateSetting($attribute);



        // $setting->update($data);


        return redirect()->back()->with('success' , 'تم تعديل البيانات بنجاح');

    } // end of update
}
