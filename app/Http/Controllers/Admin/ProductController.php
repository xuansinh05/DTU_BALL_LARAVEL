<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Model\Product;
use App\Model\Category;
use App\Model\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Collective\Html\FormBuilder;
class ProductController extends Controller
{

    protected $product;
    protected $category;
    protected $supplier;

    public function __construct(Product $product, Category $category,Supplier $supplier)
    {
        $this->product = $product;
        $this->category = $category;
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
        $sidebar=[
            'parent'=>'product',
            'child'=>'index'
        ];
        $data['sidebar']=$sidebar;

        $products = $this->product;
        //tim kiem voi ten san pham
        $search_product_name = null;
        if($request->search_product_name){
            $search_product_name = $request->search_product_name;
            $products = $products->where('name','like','%'.$search_product_name.'%');
        }
        $data['search_product_name']=$search_product_name;


        // tìm kiếm theo tên sân
        $category_id = null;
        if ($request->category_id) {
            $category_id = $request->category_id;
            $products = $products->where('category_id', $category_id);
        }
        $data['category_id'] = $category_id;

        //tìm kiếm theo nhà cung cấp


        $products = $products
            ->orderBy('id','desc')
            ->paginate(5);
        $data['products']=$products;

        $categories = $this->category->pluck('name', 'id')->toArray();
        $data['categories'] = $categories;

        $suppliers = $this->supplier->pluck('name', 'id')->toArray();
        $data['suppliers'] = $suppliers;

        return view('backend.products.index',$data);

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
            'parent' => 'product',
            'child' => 'add'
        ];
        $data['sidebar'] = $sidebar;

        //get data for category
        $categories = $this->category->pluck('name', 'id')->toArray();
        $data['categories'] = $categories;

        $suppliers = $this->supplier->pluck('name', 'id')->toArray();
        $data['suppliers'] = $suppliers;

        return view('backend.products.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        $this->product->name = $params['name'];
        $this->product->description = $params['description'];
        $this->product->unit_price = $params['unit_price'];
        $this->product->phone = $params['phone'];
        $this->product->category_id = $params['category_id'];
        $this->supplier->supplier_id = $params['supplier_id'];
        if ($request->hasFile('image')) {
            $file =$request->file('image');
            $name =$file->getClientOriginalName();
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='PNG'){
                return redirect('admin-product-edit')->with('error','tên file không hợp lệ');
            }
            if($this->product->image){
                unlink('source/image/product'.$this->product->image);
            }
            $image = Str::random(4)."_".$name;
            $file->move('source/image/product', $image);
            $this->product->image = $image;
        }
        else{
            $this->product->image=' ';
        }
        $check = $this->product->save();
        if ($check) {
            // update OK
            return redirect(route('admin-product-index'))->with('success', 'Cập nhật sân thành công.');
        }

        // update fail
        return redirect(route('admin-product-index'))->with('fail', 'Cập nhật sân thất bại.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        $sidebar = [
            'parent' => 'product',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $product = $this->product->find($id);
        $data['product']= $product;
        return view('backend.products.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $sidebar = [
            'parent' => 'product',
            'child' => 'index'
        ];
        $data['sidebar'] = $sidebar;

        $categories = $this->category->pluck('name', 'id')->toArray();
        $data['categories'] = $categories;

        $suppliers = $this->supplier->pluck('name', 'id')->toArray();
        $data['suppliers'] = $suppliers;


        $products = $this->product->find($id);
        $data['product'] = $products;
        return view('backend.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->all();
        $this->product->name = $params['name'];
        $this->product->description = $params['description'];
        $this->product->unit_price = $params['unit_price'];
        $this->product->phone = $params['phone'];
        $this->product->category_id = $params['category_id'];
        $this->supplier->supplier_id = $params['supplier_id'];
        if ($request->hasFile('image')) {
            $file =$request->file('image');
            $name =$file->getClientOriginalName();
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='PNG'){
                return redirect('admin-product-edit'.$id)->with('error','tên file không hợp lệ');
            }
            if($this->product->image){
                unlink('images/products'.$this->product->image);
            }
            $image = Str::random(4)."_".$name;
            $file->move('images/products', $image);
            $this->product->image = $image;
        }
        else{
            $this->product->image=' ';
        }
        $check = $this->product->save();
        if ($check) {
            // update OK
            return redirect(route('admin-product-index'))->with('success', 'Update product successful.');
        }

        // update fail
        return redirect(route('admin-product-index'))->with('fail', 'Update product fail.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $check = $product->delete();
        if ($check) {
            return redirect(route('admin-product-index'))->withSuccess('Xóa thành công');
        }

        return redirect(route('admin-product-index'))->withError('Xóa thất bại');
    }
}
