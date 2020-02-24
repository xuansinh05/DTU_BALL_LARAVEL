@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-product-add') }}" method="post" enctype="multipart/form-data">
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
                        <h3 class="card-title">Thêm mới sân</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên sân</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" >
                        </div>

                        <div class="form-group">
                            <label>Nội dung sân</label>
                            <input type="text" name="description" class="form-control" value="{{old('description')}}" >
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại sân</label>
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}" >
                        </div>

                        <div class="form-group">
                            <label>Giá sân</label>
                            <input type="text" name="unit_price" class="form-control" value="{{ old('unit_price') }}" >
                        </div>


                        <div class="form-group">
                            <label for="customFile">Hình ảnh sân</label><br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Tải ảnh lên</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tên khu vực</label>
                            {{ Form::select('category_id', [null => 'Xin vui lòng chọn khu vực'] + $categories, old('category_id'), ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label>Tên nhà cung cấp</label>
                            {{ Form::select('supplier_id', [null => 'Xin vui lòng chọn nhà cung cấp'] + $suppliers, old('supplier_id'), ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="form-group  text-center" style="margin-bottom: 50px">
            <a href="{{ route('admin-product-index') }}" class="btn btn-dark">Danh sách sân</a>
            <input type="submit" value="Thêm mới sân" name="submit" class="btn btn-success">
        </div>
    </form>
@endsection
