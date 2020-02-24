@extends('backend.layouts.content')

@section('content')
    <form action="{{ route('admin-category-edit', $category->id) }}" method="post">
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
                        <h3 class="card-title">Chỉnh sửa khu vực</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên khu vực</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name  }}">
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <a href="{{ route('admin-category-index') }}" class="btn btn-secondary">Danh sách khu vực</a>
            <input type="submit" value="Cập nhật" name="submit" class="btn btn-success">
        </div>
    </form>
@endsection
