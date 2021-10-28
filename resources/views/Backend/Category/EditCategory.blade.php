@extends('backend/layouts.main')
@section('content')
<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">sửa danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('admin.category.update',['id'=>$category->id]) }}">
            @csrf
            <!-- @csrf -->
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Danh mục</label>
                        <input type="text" class="form-control" id="cat_name" value="{{ $category->cat_name }}" name="cat_name"
                            placeholder="Tên danh mục">
                            <p class="text-danger">@error('cat_name'){{$message}}@enderror</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">trạng thái:
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                <input type="checkbox" value="1" {{($category->status==1)?'checked':''}} name="status"
                                    id="status" style="width: 30px;">
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