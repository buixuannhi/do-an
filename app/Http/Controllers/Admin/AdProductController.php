<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $product=Product::paginate(10);
      return view('Backend/Product/index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        $category=Category::all();
      return view('Backend/Product/AddProduct',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required',
        //     'price'=>'required| min:5'
        // ]);
         $array_rulers=[
             'name'=>'required|unique:products|max:10',
             'price' => 'required|max:10',
         ];
         $array_messages=[
             'name.required'=>'bạn phải nhập tên sản phẩm',
             'name.unique'=>'tên sản phẩm đã tồn tại',
             'name.max'=>'tên sản phẩm ko thể quá 100 ký tự',

             'price.required'=>'bạn phải nhập tên sản phẩm',
             'price.max'=>'tên sản phẩm ko thể quá 100 ký tự'
         ];
        $this->validate($request,$array_rulers,$array_messages);
        if(!isset($request->status)){
            $request['status']=0;

        }

       Product::create($request->all());

        return redirect()->route('admin.product.listProduct');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
//        $Brand=Brand::all();
        $product=Product::find($id);
       return view('Backend/Product/EditProduct',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        unset($request['_token']);
        if(!isset($request->status)){
            $request['status']=0;
        }
        Product::where('id', $id)->update($request->all());
        return redirect()->route('admin.product.listProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('admin.product.listProduct');
    }
}
