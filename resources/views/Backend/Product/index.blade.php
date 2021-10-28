@extends('backend/layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">danh sách sản phẩm </h3>
            <form class="card-tools" action="" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
            <table class="table table-bordered  text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>thể loại sản phẩm</th>
                        <th>giá gốc </th>
                        <th>giá sale</th>
                        <th>ảnh</th>
                        <th>mô tả</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $p)


                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->category->name}}</td>
                        <td>{{$p->price}}</td>
                        <td>{{$p->price_sale}}</td>
                        <td>
                            <img src="{{ $p->image }}" alt="" width="50px">
                        </td>
                        <td>{!!$p->description !!}  </td>
                        <td>
                            @if($p->status==1)
                            hiện thị
                            @else
                            ẩn
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.Product.destroy',['id'=>$p->id])}}" title="xóa"
                                onclick="return confirm('chắc chứ man')"><i class="fas fa-trash-alt"></i></a> &nbsp;
                            &nbsp;
                            <a href="{{ route('admin.Product.Edit',['id'=>$p->id])}}" title="sửa">
                                <i class="fas fa-edit"></i> </a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{ $product->onEachSide(5)->links() }}
        <!-- /.card-body
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div> -->
    </div>
</div>
@stop
