<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Http\Requests\AddCategory;
use Session;


class CmsCategories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= "Categories";
        self::$data['categories'] = Categorie::all()->toArray();
        // dd(self::$data['categories']);die;
        return view('cms/category/categories', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'] .= "Add New Category";

        return view('cms/category/addcategory', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategory $request)
    {
        // echo __METHOD__;die;
        // echo $request->image;
        if (Categorie::saveNewCategory($request)) {
            session()->flash('sm', "New category created successfully");
            // flash('new cat sucsses');

            return redirect('cms/category/categories');
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
        if (self::$data['category'] = Categorie::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Category";
            // self::$data['deleteUrl'] = "'cms/contact/contacts'";
            // dd(self::$data['deleteUrl']);

            return view("cms/category/deleteForm", self::$data);
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
        if (self::$data['category'] = Categorie::find($id)->toArray()) {
            // dd(self::$data['category'] = Categorie::find($id)->toArray());
            self::$data['title'] .= "Update Form";

            return view("cms/category/EditCategory", self::$data);
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
    public function update(AddCategory $request, $id)
    {
        if (Categorie::updateCategory($request, $id)) {


            session()->flash('sm', "The category updated successfully");
            return redirect('cms/category/categories');
        }
        return  redirect('cms/category/categories')->withErrors("The category name have been taken");;
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
            Categorie::destroy($id);
            Session::flash('sm', 'Category removed successfully');
            return redirect("cms/category/categories");
        }
    }
}
