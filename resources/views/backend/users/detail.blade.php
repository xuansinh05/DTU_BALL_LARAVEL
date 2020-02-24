@extends('backend.layouts.content')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết người dùng</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password_new" class="form-control" value="*******" disabled>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên quyền</label>
                        <input type="text" name="role_id" class="form-control" value="{{ $user->role->name   }}" disabled>
                    </div>


                    <div class="form-group">
                        <label>Giới tính</label>
                        <input type="text" name="gender" class="form-control" value="{{ $user->gender }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group text-center">
        <a href="{{ route('admin-user-index') }}" class="btn btn-secondary">Danh sách người dùng</a>
    </div>
@endsection
