@extends('backend.layouts.content')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết khu vực</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên khu vực</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" disabled>
                    </div>

                    <div class="form-group text-center">
                        <a href="{{ route('admin-category-index') }}" class="btn btn-secondary">Danh sách khu vực</a>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
