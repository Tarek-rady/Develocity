<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Sql\ContactUsRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactRepo;
    public function __construct(ContactUsRepository $contactRepo)
    {
       $this->contactRepo = $contactRepo ;
    }
    public function index()
    {
       $contacts = $this->contactRepo->getAll();
       return view('dashboard.backend.contacts.index' , compact('contacts'));


    }
}
