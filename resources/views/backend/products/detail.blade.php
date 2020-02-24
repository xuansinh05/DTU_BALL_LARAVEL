@extends('backend.layouts.content')

@section('content')
    <div class="row" >
        <div class="col-lg-7" style="margin-left: 250px">
            <div class="card card-info" >
                <div class="card-header">
                    <h3 class="card-title">Chi tiết sân</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên sân</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Mô tả sân</label>
                        <input type="text" name="description" class="form-control" value="{{ $product->description }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại của sân</label>
                        <input type="text" name="phone" class="form-control" value="{{ $product->phone }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Giá sân</label>
                        <input type="text" name="unit_price" class="form-control" value="{{ $product->unit_price }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="customFile">Hình ảnh sân</label><br>
                            <img src=" {{url('images/products/',$product->image)}}" alt="{{ $product->image }}"  width="200" class="img-fluid">
                    </div>

                    <div class="form-group">
                        <label>Tên khu vực</label>
                        <input type="text" name="category_id" value="{{ $product->category->name }}" disabled class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tên nhà cung cấp</label>
                        <input type="text" name="category_id" value="{{ $product->supplier->name }}" disabled class="form-control">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <div class="form-group  text-center" style="margin-bottom: 50px">
        <a href="{{ route('admin-product-index') }}" class="btn btn-dark">Danh sách sân</a>
    </div>
@endsection
