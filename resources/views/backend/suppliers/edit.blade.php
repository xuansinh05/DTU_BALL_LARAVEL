@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-supplier-edit', $supplier->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa nhà cung cấp</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên nhà cung cấp</label>
                            <input type="text" name="name" class="form-control" value="{{ $supplier->name }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $supplier->email }}">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="{{ $supplier->address }}">
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="form-group text-left">
            <a href="{{ route('admin-supplier-index') }}" class="btn btn-secondary">Danh sách nhà cung cấp</a>
            <input type="submit" value="Cập nhật" name="Update" class="btn btn-success">
        </div>
    </form>
@endsection
