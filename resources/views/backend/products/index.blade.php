@extends('backend.layouts.content')

@section('content')
    <h2>Danh sách sân</h2>

    <div class="row">
        <div class="col-2">
            <p><a href="{{ route('admin-product-add') }}" class="btn btn-dark">Thêm mới sân</a></p>
        </div>
        <div class="col-10">
            <form action="{{ route('admin-product-index') }}" method="get" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td><label>Tên khu vực</label></td>
                        <td>
                            {{ Form::select('category_id', [null => 'Please choose category'] + $categories, 'category_id', ['class' => 'form-control']) }}
                        </td>
                        <td><label>Tên sân</label></td>
                        <td>
                            <input type="text" name="search_product_name" value="{{ isset($search_product_name) ? $search_product_name : '' }}" class="form-control">
                        </td>
                        <td><input type="submit" value="Search" class="btn btn-dark"></td>
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

    @if(empty($products))
        <p class="error">Data empty</p>
    @else
        <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Tên khu vực</th>
                <th>Tên nhà cung cấp</th>
                <th>Hình nhỏ</th>
                <th colspan="5">Action</th>
            </tr>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->supplier->name }}</td>
                    <td>
                        <img src="{{url('images/products/',$product->image)}}" width="80" alt="{{$product->image}}"  >
                    </td>
                    <td>
                        <a href="{{ route('admin-product-detail', $product->id) }}" class="btn btn-dark">Detail</a>
                    </td>
                    <td>
                        <a href="{{ route('admin-product-edit', $product->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin-product-delete', $product->id) }}" method="post">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $products->links() }}
    @endif
@endsection
