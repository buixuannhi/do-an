<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *tp\Response
     */
    public function index()
    {
       $cat=Category::orderBy('created_at','DESC')->Search()->paginate(10);
        return view('backend/category/index',compact('cat'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/Category/addcategory');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!isset($request->status)){
            $request['status'] =0 ;
        }
        // dd($request->all());
        category::create($request->all() );
        return redirect()->route('admin.category.listcategory')->with(['success'=>'thêm mới danh mục thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $category=Category::find($id);
       return view('Backend/category/EditCategory',compact('category'));
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
        $rulers=[
            'cat_name'=>'required|max:100',
        ];
        $messages=[
            'cat_name.required'=>'bạn phải nhập tên thể loại',
            'cat_name.max'=>'tên thể ko thể quá 100 ký tự',
        ];
       $this->validate($request,$rulers,$messages);
        if(!isset($request->status)){
            $request->status=0;
        }
        category::where('id', $id)->update([
            'cat_name'=>$request->cat_name,
            'status'=>$request->status
        ]);
        return redirect()->route('admin.category.listcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $P=Category::find($id);
        if($P->product->count() > 0){
         
            return redirect()->route('admin.category.listcategory')->with(['er'=>'không thể xóa']);
        }else{
            Category::where('id',$id)->delete();
            return redirect()->route('admin.category.listcategory')->with(['success'=>'xóa thành công']);
     
        }
      
    }
}