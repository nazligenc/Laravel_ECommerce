<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{

    public function index()
    {
        $data=Product::all();
        return view('admin.product.index',[
            "data"=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.product.create',[
            "data"=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Product();
        $data->category_id=$request->category_id;
        $data->user_id=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->detail=$request->detail;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->minquantity=$request->minquantity;
        $data->tax=$request->tax;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {
        $data=Product::find($id);
        return view('admin.product.show',[
            "data"=>$data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$id)
    {
        $data= Product::find($id);
        $datalist= Category::all();
        return  view('admin.product.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product,$id)
    {
        $data=Product::find($id);
        $data->category_id=$request->category_id;
        $data->user_id=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->detail=$request->detail;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->minquantity=$request->minquantity;
        $data->tax=$request->tax;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
       $data=Product::find($id);
       Storage::delete($data->image);
       $data->delete();
       return redirect('admin/product');
    }
}
