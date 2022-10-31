<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\TagRepository;

class TagController extends Controller
{
    protected $tagRepo ;
    public function __construct(TagRepository $tagRepo )
    {
       $this->tagRepo = $tagRepo ;

    }
    public function index()
    {
        $tags = $this->tagRepo->getAll();
        return view('dashboard.backend.tags.index' , compact('tags'));
    }


    public function create()
    {
         return view('dashboard.backend.tags.create' );
    }


    public function store(TagRequest $request)
    {
       $data = $request->all();
       $this->tagRepo->create($data);
      return redirect(route('admin.tags.index'))->with('success', __('models.added_successfully'));


    }




    public function edit($id)
    {
        $tag = $this->tagRepo->findOne($id);
         return view('dashboard.backend.tags.edit' , compact('tag'));
    }


    public function update(TagRequest $request, $id)
    {
        $tag = $this->tagRepo->findOne($id);
       $data = $request->all();
        $tag->update($data);
        return redirect(route('admin.tags.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $tag = $this->tagRepo->findOne($id)->delete();
        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
