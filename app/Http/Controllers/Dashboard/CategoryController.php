<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DefultRequest;
use App\Repositories\Sql\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo ;
    }
    public function index()
    {
        $categories = $this->categoryRepo->getAll();
        return view('dashboard.backend.categories.index' , compact('categories'));
    }


    public function create()
    {
         return view('dashboard.backend.categories.create');
    }


    public function store(DefultRequest $request)
    {
       $data = $request->all();
       $this->categoryRepo->create($data);

      return redirect(route('admin.categories.index'))->with('success', __('models.added_successfully'));
    }


    public function edit($id)
    {
        $category = $this->categoryRepo->findOne($id);
         return view('dashboard.backend.categories.edit' , compact('category'));
    }


    public function update(DefultRequest $request, $id)
    {
       $category = $this->categoryRepo->findOne($id);
       $data = $request->all();
       $category->update($data);

        return redirect(route('admin.categories.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $category = $this->categoryRepo->findOne($id)->delete();
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
