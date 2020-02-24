@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-supplier-add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới nhà cung cấp</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên nhà cung cấp</label>
                            <input type="text" name="name"  class="form-control" value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                        </div>


                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="form-group text-left">
            <a href="{{ route('admin-supplier-index') }}" class="btn btn-secondary">Danh sách nhà cung cấp</a>
            <input type="submit" value="Thêm mới" name="submit" class="btn btn-success">
        </div>
    </form>
@endsection

