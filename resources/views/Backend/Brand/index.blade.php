@extends('backend/layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">danh sách sản phẩm </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                      
                        <th>tên hãng sản xuất </th>
                        <th>logo </th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($brand as $B)

                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$B->id}}</td>
                        <td>{{$B->name}}</td>
                        <td>{{$B->price}}</td>
                       
                        <td>
                            <img src="{{ $B->logo }}" alt="" width="50px">
                        </td>
                        <td>
                            @if($B->status==1)
                            hiện thị
                            @else
                            ẩn
                            @endif
                        </td>
                        <td>
                            <a href="" title="xóa"
                                onclick="return confirm('chắc chứ man')"><i class="fas fa-trash-alt"></i></a> &nbsp; &nbsp;
                            <a href="" title="sửa">
                               <i class="fas fa-edit"></i> </a>
                        </td>

                    </tr>
                    @endforeach
            
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>
@stop