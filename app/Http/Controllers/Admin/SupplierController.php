<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SupplierRequest;
use App\Model\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    protected $supplier;

    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $pageTitle = 'Danh sách nhà cung cấp';
        $data['pageTitle'] = $pageTitle;
        $sidebar = [
            'parent' => 'supplier',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $suppliers = $this->supplier;
        //tìm kiếm với tên nhà cung cấp
        $search_supplier_name = null;
        if ($request->search_supplier_name) {
            $search_supplier_name = $request->search_supplier_name;
            $suppliers = $suppliers->where('name', 'like', '%' . $search_supplier_name . '%');
        }
        $data['search_supplier_name'] = $search_supplier_name;

        $suppliers =$suppliers
            ->orderBy('id','desc')
            ->paginate(5);

        $data['suppliers'] = $suppliers;
        //dd($suppliers);
        return view('backend.suppliers.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $pageTitle = 'Danh sách nhà cung cấp';
        $data['pageTitle'] = $pageTitle;
        $sidebar = [
            'parent' => 'supplier',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        return view('backend.suppliers.add', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $params = $request->all();
        //xử lý lưu dữ liệu cho bảng nhà cung cấp
        $this->supplier->name = $params['name'];
        $this->supplier->email = $params['email'];
        $this->supplier->phone = $params['phone'];
        $this->supplier->address = $params['address'];
        $this->supplier->name_proxy = $params['name_proxy'];
        $checkSupplier = $this->supplier->save();

        //Kiểm tra đã nhập nhà cung cấp hay chưa, nhập rồi in ra thông báo cập nhật thành công
        if ($checkSupplier){
            return redirect(route('admin-supplier-index'))->with('success',"Thêm mới nhà cung cấp thành công nha!!!");
        }
        // cập nhật lỗi
        return redirect(route('admin-supplier-index'))->with('fail',"Thêm mơi nhà cung cấp không thành công rùi :((!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        $sidebar = [
            'parent' => 'supplier',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $supplier = $this->supplier->find($id);
        $data['supplier'] = $supplier;
        return view('backend.suppliers.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $sidebar = [
            'parent' => 'supplier',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $supplier = $this->supplier->find($id);
        $data['supplier'] = $supplier;
        return view('backend.suppliers.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, $id)
    {
        $params = $request->all();
        //xử lý lưu dữ liệu cho bảng nhà cung cấp
        $this->supplier = $this->supplier->find($id);
        $this->supplier->name = $params['name'];
        $this->supplier->email = $params['email'];
        $this->supplier->phone = $params['phone'];
        $this->supplier->address = $params['address'];
        $this->supplier->name_proxy = $params['name_proxy'];
        $checkSupplier = $this->supplier->save();

        //Kiểm tra đã nhập nhà cung cấp hay chưa, nhập rồi in ra thông báo cập nhật thành công
        if ($checkSupplier){
            return redirect(route('admin-supplier-index'))->with('success',"Cập nhật thành công nha!!!");
        }

        // cập nhật lỗi
        return redirect(route('admin-supplier-index'))->with('fail',"Cập nhật không thành công rùi :((!!!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $check = $supplier->delete();
        if ($check) {
            return redirect(route('admin-supplier-index'))->withSuccess('Xóa thành công');
        }

        return redirect(route('admin-supplier-index'))->withError('Xóa thất bại');
    }
}
