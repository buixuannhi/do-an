@extends('backend/layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">danh sách thể loại sản phẩm</h3>
           @if(session('er'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{session('er')}}
            </div>
             @endif
            @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('success')}}
            </div>
            @endif
            
            <form class="card-tools" actio  n="" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="key" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>tên danh mục</th>
                        <th>tổng sản phẩm</th>
                        <th>trạng thái</th>
                        <th>ngày tạo</th>
                        <th class="text-right">hoạt động</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($cat as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->cat_name}}</td>
                        <td>{{$c->product->count()}}</td>
                        <td>
                            @if ($c->status==1)
                           <span class="badge badge-success">hiện</span>
                            @else
                            <span class="badge badge-danger">ẩn</span>
                            @endif
                        </td>
                        <td>{{$c->created_at->format('m-d-Y')}}</td>
                      
                        <td class="text-right">
                            <a href="{{route('admin.category.edit',['id'=>$c->id])}}" class="btn btn-sm btn-success" title="sửa "> <i
                                    class="fas fa-edit"></i></a>
                            <a href="{{route('admin.category.destroy',['id'=>$c->id])}}" class="btn btn-sm btn-danger"
                                onclick="return confirm('chắc chứ pro!!')" title="xóa">
                                <i class="fas fa-trash-alt"></i></a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="d-flex justify-content-center">
            {{ $cat->appends(request()->all())->links() }}
           </div>
            @endsection