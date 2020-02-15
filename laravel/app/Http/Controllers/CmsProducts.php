<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Categorie;
use App\Http\Requests\AddProduct;
use Session;
use App\Http\Requests\EditProduct;

class CmsProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= "Products";
        self::$data['product'] = Product::all()->toArray();
        self::$data['products'] = DB::select('select p.*,c.cat_name from categories as c join products as p on c.id = p.cat_id');
        return view('cms/product/products', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        self::$data['title'] .= "Add New Product";
        self::$data['categories'] = Categorie::all()->toArray();
        // dd(self::$data['categories']);
        return view('cms/product/addproduct', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProduct $request)
    {
        if (Product::saveNewProduct($request)) {
            session()->flash('sm', "New Product created successfully");
            // flash('new cat sucsses');

            return redirect('cms/product/products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        if (self::$data['product'] = Product::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Product";
            return view("cms/product/deleteForm", self::$data);
            // return self::$data;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($product = DB::select('select p.*,c.cat_name from categories as c join products as p on c.id = p.cat_id where p.id =?', [$id])) {
            // dd(self::$data['product']);
            // die;
            self::$data['product'] = $product[0];
            self::$data['category'] = Categorie::all();
            self::$data['title'] .= "Edit Form";

            return view("cms/product/EditProduct", self::$data);
            // return self::$data;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProduct $request, $id)
    {
        if (Product::updateProduct($request, $id)) {
            session()->flash('sm', "The Product updated successfully");
            return redirect('cms/product/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id && is_numeric($id)) {
            Product::destroy($id);
            Session::flash('sm', 'Product removed successfully');
            return redirect("cms/product/products");
        }
    }
}
