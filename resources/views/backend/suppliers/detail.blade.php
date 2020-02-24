
@extends('backend.layouts.content')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết nhà cung cấp</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên nhà cung cấp</label>
                        <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $supplier->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ $supplier->address }}" disabled>
                    </div>

                    <div class="form-group text-center">
                        <a href="{{ route('admin-supplier-index') }}" class="btn btn-secondary">Danh sách nhà cung cấp</a>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
