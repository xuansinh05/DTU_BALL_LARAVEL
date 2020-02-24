@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-user-add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới người dùng</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
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
                            <label>Giới tính</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="">Choose gender</option>
                                <option value="Nam" {{ old('gender') == 'Nam' ? 'selected' : ''}}>Nam</option>
                                <option value="Nữ" {{ old('gender') == 'Nữ' ? 'selected' : ''}}>Nữ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        </div>

                        <div class="form-group">
                            <label>Quyền</label>
                            {{ Form::select('role_id', [null => 'Please choose a Role'] + $roles, old('role_id'), ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <a href="{{ route('admin-user-index') }}" class="btn btn-secondary">Danh sách người dùng</a>
            <input type="submit" value="Thêm mới" name="submit" class="btn btn-success">
        </div>
    </form>
@endsection
