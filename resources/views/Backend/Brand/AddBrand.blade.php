@extends('backend/layouts.main')
@section('content')
<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới hãng sản xuất</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('admin.Brand.store') }}">
            @csrf
            <!-- @csrf -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên hãng</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">logo</label>
                    <input id="feil" type="text" name="logo" value="">
                    <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn"
                        type="button">Select</a>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">trạng thái:
                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                            <input type="checkbox" value="1" name="status" id="status" style="width: 30px;">
                        </td>
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>
@stop