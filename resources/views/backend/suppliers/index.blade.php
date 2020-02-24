@extends('backend.layouts.content')

@section('content')
    <h2>Danh sách nhà cung cấp</h2>
    <div class="row">
        <div class="col-3">
            <p><a href="{{route('admin-supplier-add')}}" class="btn btn-dark">Thêm mới nhà cung cấp</a></p>
        </div>
        <div class="col-9">
            <form action="{{route('admin-supplier-index')}}" method="get">
                <table class="table table-bordered">
                    <tr>
                        <td>Tên nhà cung cấp</td>
                        <td>
                            <input type="text" name="search_supplier_name"
                                   value="{{ isset($search_supplier_name) ? $search_supplier_name : '' }}"
                                   class="form-control">
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
    @if(empty($suppliers))
        <p class="error">Data Empty</p>
    @else
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>STT</th>
                <th>Tên nhà cung cấp</th>
                <th>Địa chỉ</th>
                <th colspan="5" >Hành động</th>
            </tr>
            @foreach($suppliers as $key => $supplier)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{  $supplier->name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                        <a href="{{route('admin-supplier-detail',$supplier->id)}}" class="btn btn-dark">Chi tiết</a>
                    </td>
                    <td>
                        <a href="{{route('admin-supplier-edit',$supplier->id)}}" class="btn btn-success">Sửa</a>
                    </td>
                    <td>
                        <form action="{{ route('admin-supplier-delete', $supplier->id) }}" method="post">
                            @csrf
                            <input type="submit" value="Xóa" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $suppliers->links() }}
    @endif
@endsection
