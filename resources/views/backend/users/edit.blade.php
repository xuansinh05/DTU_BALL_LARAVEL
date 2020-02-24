@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-user-edit', $user->id) }}" method="post" enctype="multipart/form-data">
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
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password_new" class="form-control" value="">
                        </div>

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
                        {{ Form::select('role_id', [null => 'Please choose a Role'] + $roles, $user->role_id, ['class' => 'form-control']) }}
                    </div>


                    <div class="form-group">
                        <label>Giới tính</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="">Choose gender</option>
                                <option value="Nam" {{ $user->gender == 'Nam' ? 'selected' : ''}}>Nam</option>
                                <option value="Nữ" {{ $user->gender == 'Nữ' ? 'selected' : ''}}>Nữ</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="form-group text-center">
            <a href="{{ route('admin-user-index') }}" class="btn btn-secondary">Danh sách người dùng</a>
            <input type="submit" value="Cập nhật" name="Update" class="btn btn-success">
        </div>
    </form>
@endsection
