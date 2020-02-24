@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-product-edit', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-7" style="margin-left: 250px">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="card card-info" >
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa sân</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên sân</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" >
                    </div>

                    <div class="form-group">
                        <label>Mô tả sân</label>
                        <input type="text" name="description" class="form-control" value="{{ $product->description }}" >
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại của sân</label>
                        <input type="text" name="phone" class="form-control" value="{{ $product->phone }}" >
                    </div>

                    <div class="form-group">
                        <label>Giá sân</label>
                        <input type="text" name="unit_price" class="form-control" value="{{ $product->unit_price }}" >
                    </div>

                    <div class="form-group">
                        <label for="customFile">Hình ảnh sân</label><br>
                        <img src=" {{url('images/products/',$product->image)}}" alt="{{ $product->image }}"  width="200" class="img-fluid">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Khu vực</label>
                        {{ Form::select('category_id', [null => 'Xin vui lòng chọn khu vực'] + $categories, $product->category_id, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        {{ Form::select('supplier_id',[null=>'Xin vui lòng chon nhà cung cấp'] + $suppliers, $product->supplier_id,['class'=>'form-control'] )}}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <div class="form-group  text-center" style="margin-bottom: 50px">
        <a href="{{ route('admin-product-index') }}" class="btn btn-dark">Danh sách sân</a>
        <input type="submit" value="Cập nhật" name="submit" class="btn btn-success">
    </div>
    </form>
@endsection
