<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        $sidebar = [
            'parent' => 'category',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $categories = $this->category;

        // search with category name
        $search_category_name = null;
        if ($request->search_category_name) {
            $search_category_name = $request->search_category_name;
            $categories = $categories->where('name', 'like', '%' . $search_category_name . '%');
        }
        $data['search_category_name'] = $search_category_name;


        $categories = $categories
            ->orderBy('id', 'desc')
            ->paginate(5);
        $data['categories'] = $categories;


        return view('backend.categories.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [];
        $sidebar = [
            'parent' => 'category',
            'child' => 'add'
        ];
        $data['sidebar'] = $sidebar;

        return view('backend.categories.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $params = $request->all();
        //lưu dữ liệu vào bảng danh mục
        $this->category->name = $params['name'];
        $checkCategory = $this->category->save();

        //Nếu thêm thành công thì chuyển hướng trang về danh sách danh mục
        if ($checkCategory) {
            return redirect(route('admin-category-index'))->with('success', 'Thêm nhà cung cấp thành công');
        }
        //Thêm mới thất bại thì báo lỗi

        return redirect(route('admin-category-index'))->with('fail', 'Thêm nhà cung cấp thất bại thất bại');
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
            'parent' => 'category',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;


        $category = $this->category->find($id);
        $data['category'] = $category;

        return view('backend.categories.detail', $data);
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
            'parent' => 'category',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;


        $category = $this->category->find($id);
        $data['category'] = $category;

        return view('backend.categories.edit', $data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $params = $request->all();
        //lưu dữ liệu vào bảng danh mục
        $this->category = $this->category->find($id);
        $this->category->name = $params['name'];
        $checkCategory = $this->category->save();


        //Nếu cập nhật thành công thì chuyển hướng trang về danh sách danh mục
        if ($checkCategory) {
            return redirect(route('admin-category-index'))->with('success', 'Cập nhật thành công');
        }

        //cập nhật thất bại thì báo lỗi

        return redirect(route('admin-category-index'))->with('fail', 'Cập nhật thất bại');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $check = $category->delete();
        if ($check) {
            return redirect(route('admin-category-index'))->withSuccess('Xóa thành công');
        }

        return redirect(route('admin-category-index'))->withError('Xóa thất bại');
    }
}
