<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->parent_id=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
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
        return view('admin.category.edit',[
            "data"=> $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category,$id)
    {
        $data=Category::find($id);
        $data->parent_id=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        echo "Category Destroy";
    }
}
