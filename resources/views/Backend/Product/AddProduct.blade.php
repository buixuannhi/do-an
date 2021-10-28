@extends('backend/layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">thêm mới sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('admin.product.store' ) }}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">mã sản phẩm</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="mã sản phẩm">
                </div> -->

                <div class="form-group">
                    <label for="exampleInputEmail1">tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="tên sản phẩm ">
                    @error('name')
                    <p class="text-danger">
                        {{$message}}
                 </p>
                 }@enderror
                </div>

               <div class="form-group">
                    <label for="exampleInputEmail1">ảnh sản phẩm</label>
                    <input id="feil" type="text" name="image" value="1">
                    <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn"
                        type="button">Select</a>
                </div>
                <div class="form-group">
                  <label for="cat_id">loại sản phẩm</label>
                  <select name="cat_id" id="cat_id" class="form-control">

                         @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                        </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="cat_id">hãng sản xuất</label>--}}
{{--                    <select name="brand_id" id="brand_idSS" class="form-control">--}}

{{--                        @foreach($Brand as $B)--}}
{{--                        <option value="{{$B->id}}">{{$B->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">giá sản phẩm</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="giá gốc ">
                    <p class="text-danger">@error('price'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">giá sale</label>
                    <input type="number" class="form-control" id="price_sale" name="price_sale"
                        placeholder="giá khuyến mại ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">trạng thái
                    </label>
                    <input type="checkbox" class="form-control" id="status" name="status" value="1" style="width: 10%;">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả sản phẩm </label>
                    <textarea name="description" id="editor-ckeditor" rows="10" cols="80"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">lưu</button>
            </div>

        </form>

    </div>
</div>
@stop
