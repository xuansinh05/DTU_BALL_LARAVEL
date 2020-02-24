@extends('backend.layouts.content')

@section('content')
    <h2>Danh sách tài khoản</h2>
    <div class="row">
        <div class="col-3">
            <p><a href="{{ route('admin-user-add') }}" class="btn btn-dark">Thêm mới tài khoản</a></p>
        </div>
        <div class="col-9">
            <form action="{{ route('admin-user-index') }}" method="get">
                <table class="table table-bordered ">
                    <tr>
                        <td>Tên tài khoản</td>
                        <td>
                            <input type="text" name="search_user_name" value="{{ $search_user_name }}"class="form-control">
                        </td>
                        <td>
                            <input type="submit" value="Tìm kiếm" class="btn btn-dark">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    {{--show message success--}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    {{--show message fail--}}
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    @if(empty($users))
        <p class="error">Dữ liệu trống</p>
    @else
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>STT</th>
                <th>Tên tài khoản</th>
                <th>Tên quyền</th>
                <th colspan="3">Hành động</th>
            </tr>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ empty($user->role->name) ? '' : $user->role->name }}</td>
                    <td>
                        <a href="{{ route('admin-user-detail', $user->id) }}" class="btn btn-dark">Chi tiết</a>
                    </td>
                    <td>
                        <a href="{{ route('admin-user-edit', $user->id) }}" class="btn btn-success">Sửa</a>
                    </td>
                    <td>
                        <form action="{{ route('admin-user-delete', $user->id) }}" method="post">
                            @csrf
                            <input type="submit" value="Xóa" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    @endif
@endsection
