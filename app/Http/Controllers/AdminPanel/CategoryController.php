<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends=[
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title){
        if($category->parent_id==0){
            return $title;
        }
        $parent=Category::find($category->parent_id);
        $title= $parent->title.'>'. $title;
        return CategoryController::getParentsTree($parent,$title);

    }
    public function index()
    {
        $data=Category::all();
        return view('admin.category.index',[
            "data"=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.category.create',[
            "data"=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category,$id)
    {
        $data=Category::find($id);
        return view('admin.category.show',[
            "data"=>$data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        $data=Category::find($id);
        $datalist= Category::all();
        return  view('admin.category.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category,$id)
    {
        $data=Category::find($id);
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$id)
    {
       $data=Category::find($id);
       Storage::delete($data->image);
       $data->delete();
       return redirect('admin/category');
    }
}
