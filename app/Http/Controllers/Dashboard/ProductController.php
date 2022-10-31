<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ProductRepository;
use App\Repositories\Sql\TagRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    protected $productRepo , $categoryRepo , $tagRepo ;

    public function __construct(ProductRepository $productRepo , CategoryRepository $categoryRepo , TagRepository $tagRepo)
    {
       $this->productRepo = $productRepo ;
       $this->categoryRepo = $categoryRepo ;
       $this->tagRepo = $tagRepo ;
    }
    public function index()
    {
        $products = $this->productRepo->getAll();
        return view('dashboard.backend.products.index' , compact('products'));
    }


    public function create()
    {
         $categories = $this->categoryRepo->getAll();
         $tags = $this->tagRepo->getAll();
         return view('dashboard.backend.products.create' , compact('categories' , 'tags'));
    }


    public function store(ProductRequest $request)
    {
       $data = $request->except('img');

      if ($request->hasFile('img')) {
        $data['img'] = $request->file('img')->store('products');
      }

      $this->productRepo->create($data);

      return redirect(route('admin.products.index'))->with('success', __('models.added_successfully'));


    }


    public function show($id)
    {
        $product = $this->productRepo->findOne($id);
        return view('dashboard.backend.products.show' , compact('product'));

    }


    public function edit($id)
    {
        $product = $this->productRepo->findOne($id);
        $categories = $this->categoryRepo->getAll();
        $tags = $this->tagRepo->getAll();
         return view('dashboard.backend.products.edit' , compact('product' , 'categories' , 'tags'));
    }


    public function update( ProductRequest $request, $id)
    {
        $product = $this->productRepo->findOne($id);

       $data = $request->except('img');


       if ($request->hasFile('img')) {

        Storage::delete($product->img);

        $data['img'] = $request->file('img')->store('products');

    } else {
        $data['img'] = $product->img;
    }
      $product->update($data);
     return redirect(route('admin.products.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {

        $product = $this->productRepo->findOne($id);

        if ($product->img) {
            Storage::delete($product->img);
        }

        $product->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
